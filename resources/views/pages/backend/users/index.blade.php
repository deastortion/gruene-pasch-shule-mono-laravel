@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/content/events/index.css') }}">
@endsection

@section('content')

    <div class="resource">
        <div class="resource__header">
            <div class="resource__left">
                <div class="resource__title">
                    <span class="las la-calendar-day"></span>
                    <h1>@lang('dashboard.users.title')</h1>
                </div>
                <div class="selected-count" id="selected-count">
                    <span>@lang('dashboard.users.selected'): </span>
                    <span id="selected-number">0</span>
                </div>
            </div>
            <div class="resource__right">
                <form method="POST" id="delete">
                    @csrf
                    @method('DELETE')
                </form>
                <div class="actions">
                    {{-- <a href="/dashboard/events/create" class="actions__action action-delete-all">
                        <span class="las la-plus"></span>
                        <span>@lang('dashboard.events.create-button')</span>
                    </a> --}}
                    <button class="actions__action action-delete-all" onclick="sendRequest('users')">
                        <span class="las la-trash-alt"></span>
                        <span>@lang('dashboard.users.delete-button')</span>
                    </button>
                </div>
                <form class="resource__search" method="GET">
                    <input type="search" name="search" id="search" class="resource__search-input" required
                        placeholder="@lang('dashboard.users.search.placeholder')">
                    <button type="submit" class="las la-search resource__search-btn"></button>
                </form>

            </div>
        </div>
        <div class="resource__body">
            @if (count($users) > 0)

                <table>
                    <thead>
                        <tr>
                            <th class="th__checkbox"><input type="checkbox" name="checkbox-all" id="checkbox-all"></th>
                            <th class="th__id">#</th>
                            {{-- <th class="th__image">@lang('dashboard.users.table-headers.image')</th> --}}
                            <th class="th__title">@lang('dashboard.users.table-headers.name')</th>
                            <th class="th__description">@lang('dashboard.users.table-headers.email')</th>
                            <th class="th__created-at">@lang('dashboard.users.table-headers.created-at')</th>
                            <th class="th__actions">@lang('dashboard.users.table-headers.actions')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                            <tr class="tr">
                                <td class="td__checkbox"><input class="checkbox" type="checkbox"
                                        name="checkbox-{{ $user->id }}" id="checkbox-{{ $user->id }}"
                                        value="{{ $user->id }}"></td>
                                <td class="td__id">{{ $user->id }}</td>
                                {{-- <td class="td__image"><img src="{{ $user->image }}" alt=""></td> --}}
                                <td class="td__title">{{ $user->name }}</td>
                                <td class="td__description">{{ $user->email }}</td>
                                <td class="td__created-at">{{ $user->created_at->format('d F, Y') }}</td>
                                <td class="td__actions">
                                    <div class="actions">
                                        <a href="{{ '/dashboard/users/' . $user->id }}"
                                            class="actions__action las la-eye"></a>
                                        <a href="{{ '/dashboard/users/' . $user->id . '/edit' }}"
                                            class="actions__action las la-pen"></a>
                                        <form action="{{ '/dashboard/users/' . $user->id }}" method="POST">
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
        @if ($users->hasPages())
            <div class="resource__footer">
                {{ $users->withQueryString()->onEachSide(1)->links() }}
                <div class="page-input">
                    <form onsubmit="pageFormSubmit('users')" method="GET" id="pageForm">
                        <input type="text" placeholder="@lang('dashboard.users.page')" name="page" id="pageInput" autocomplete="off">
                        <input type="submit" value="" style="display: none">
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection
