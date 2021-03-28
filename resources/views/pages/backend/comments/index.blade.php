@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/events/index.css') }}">
    <style>
        .td__event {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 200px;
        }

        .actions {
            justify-content: flex-start;
        }

    </style>
@endsection

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
            @endif
        @endforeach
    </div>
    <div class="resource">

        <div class="resource__header">
            <div class="resource__left">
                <div class="resource__title">
                    <span class="las la-comment"></span>
                    <h1>@lang('dashboard.comments.title')</h1>
                </div>
                <div class="selected-count" id="selected-count">
                    <span>@lang('dashboard.comments.selected'): </span>
                    <span id="selected-number">0</span>
                </div>
            </div>
            <div class="resource__right">
                <form method="POST" id="delete">
                    @csrf
                    @method('DELETE')
                </form>
                <div class="actions">
                    <button class="actions__action action-delete-all" onclick="sendRequest('comments')">
                        <span class="las la-trash-alt"></span>
                        <span>@lang('dashboard.comments.delete-button')</span>
                    </button>
                </div>
                <form class="resource__search" method="GET">
                    <input type="search" name="search" id="search" class="resource__search-input" required
                        placeholder="@lang('dashboard.comments.search.placeholder')"
                        value="{{ app('request')->input('search') }}">
                    <button type="submit" class="las la-search resource__search-btn"></button>
                </form>

            </div>
        </div>
        <div class="resource__body">
            @if (count($comments) > 0)

                <table>
                    <thead>
                        <tr>
                            <th class="th__checkbox"><input type="checkbox" name="checkbox-all" id="checkbox-all"></th>
                            <th class="th__id">#</th>
                            <th class="th__event">Event</th>
                            <th class="th__user">Author</th>
                            <th class="th__description">@lang('dashboard.comments.table-headers.content')</th>
                            <th class="th__created-at">@lang('dashboard.comments.table-headers.created-at')</th>
                            <th class="th__actions">@lang('dashboard.comments.table-headers.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comments as $comment)

                            <tr class="tr">
                                <td class="td__checkbox"><input class="checkbox" type="checkbox"
                                        name="checkbox-{{ $comment->id }}" id="checkbox-{{ $comment->id }}"
                                        value="{{ $comment->id }}"></td>
                                <td class="td__id">{{ $comment->id }}</td>
                                <td class="td__event">{{ $comment->event ? $comment->event->title : '' }}</td>
                                <td class="td__user">{{ $comment->user->name }}</td>
                                <td class="td__description">{{ $comment->content }}</td>
                                <td class="td__created-at">{{ $comment->created_at->format('d F, Y') }}</td>
                                <td class="td__actions">
                                    <div class="actions">
                                        <a href="{{ '/dashboard/comments/' . $comment->id }}"
                                            class="actions__action las la-eye"></a>
                                        {{-- <a href="{{ '/dashboard/comments/' . $comment->id . '/edit' }}"
                                            class="actions__action las la-pen"></a> --}}
                                        <form action="{{ '/dashboard/comments/' . $comment->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="actions__action las la-trash-alt"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            @endif
        </div>
        @if ($comments->hasPages())
            <div class="resource__footer">
                {{ $comments->withQueryString()->onEachSide(1)->links() }}
                <div class="page-input">
                    <form onsubmit="pageFormSubmit('comments')" method="GET" id="pageForm">
                        <input type="text" placeholder="@lang('dashboard.comments.page')" name="page" id="pageInput"
                            autocomplete="off">
                        <input type="submit" value="" style="display: none">
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
