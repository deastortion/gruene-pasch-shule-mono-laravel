@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/events/index.css') }}">
    <style>
        .td__description, .td__title {
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
                    <span class="las la-calendar-day"></span>
                    <h1>@lang('dashboard.events.title')</h1>
                </div>
                <div class="selected-count" id="selected-count">
                    <span>@lang('dashboard.events.selected'): </span>
                    <span id="selected-number">0</span>
                </div>
            </div>
            <div class="resource__right">
                <form method="POST" id="delete">
                    @csrf
                    @method('DELETE')
                </form>
                <div class="actions">
                    <a href="/dashboard/events/create" class="actions__action action-delete-all">
                        <span class="las la-plus"></span>
                        <span>@lang('dashboard.events.create-button')</span>
                    </a>
                    <button class="actions__action action-delete-all" onclick="sendRequest('events')">
                        <span class="las la-trash-alt"></span>
                        <span>@lang('dashboard.events.delete-button')</span>
                    </button>
                </div>
                <form class="resource__search" method="GET">
                    <input type="search" name="search" id="search" class="resource__search-input" required
                        placeholder="@lang('dashboard.events.search.placeholder')"
                        value="{{ app('request')->input('search') }}">
                    <button type="submit" class="las la-search resource__search-btn"></button>
                </form>

            </div>
        </div>
        <div class="resource__body">
            @if (count($events) > 0)

                <table>
                    <thead>
                        <tr>
                            <th class="th__checkbox"><input type="checkbox" name="checkbox-all" id="checkbox-all"></th>
                            <th class="th__id">#</th>
                            <th class="th__image">@lang('dashboard.events.table-headers.image')</th>
                            <th class="th__title">@lang('dashboard.events.table-headers.title')</th>
                            <th class="th__description">@lang('dashboard.events.table-headers.description')</th>
                            <th class="th__created-at">@lang('dashboard.events.table-headers.created-at')</th>
                            <th class="th__actions">@lang('dashboard.events.table-headers.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)

                            <tr class="tr">
                                <td class="td__checkbox"><input class="checkbox" type="checkbox"
                                        name="checkbox-{{ $event->id }}" id="checkbox-{{ $event->id }}"
                                        value="{{ $event->id }}"></td>
                                <td class="td__id">{{ $event->id }}</td>
                                <td class="td__image"><img src="{{ $event->image }}" alt=""></td>
                                <td class="td__title">{{ $event->title }}</td>
                                <td class="td__description">{{ $event->description }}</td>
                                <td class="td__created-at">{{ $event->created_at->format('d F, Y') }}</td>
                                <td class="td__actions">
                                    <div class="actions">
                                        <a href="{{ '/dashboard/events/' . $event->id }}"
                                            class="actions__action las la-eye"></a>
                                        <a href="{{ '/dashboard/events/' . $event->id . '/edit' }}"
                                            class="actions__action las la-pen"></a>
                                        <form action="{{ '/dashboard/events/' . $event->id }}" method="POST">
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
        @if ($events->hasPages())
            <div class="resource__footer">
                {{ $events->withQueryString()->onEachSide(1)->links() }}
                <div class="page-input">
                    <form onsubmit="pageFormSubmit('events')" method="GET" id="pageForm">
                        <input type="text" placeholder="@lang('dashboard.events.page')" name="page" id="pageInput"
                            autocomplete="off">
                        <input type="submit" value="" style="display: none">
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
