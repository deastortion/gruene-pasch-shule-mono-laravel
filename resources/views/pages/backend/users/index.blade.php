@extends('layouts.backend.index')

@section('unique-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/backend/content/users/index.css') }}">
@endsection

@section('content')
    <form id="delete" method="POST">
        @csrf
        @method('DELETE')
    </form>
        <div class="card">
            <div class="card__header">
                <h1 class="card__title">
                    Users
                </h1>
                <div class="info">
                    {{-- {{dd($users)}} --}}
                    <span id="selected">Selected: 0</span>
                    <span>Total: {{$users->total()}}</span>
                    <span>From 1 to {{$users->lastPage()}}</span>
                    <span>Per page: {{$users->perPage()}}</span>
                    <span>Current page: {{$users->currentPage()}}</span>
                </div>
                <div class="actions">
                    <a href="#" class="action" onclick="sendRequest()">Delete</a>
                </div>
            </div>
            <div class="card__body">
                <table>
                    <thead>
                        <tr>
                            <th class="header-selected"><input type="checkbox" name="checkbox-all" id="checkbox-all"></th>
                            <th class="header-id">Id</th>
                            <th class="header-name">Name</th>
                            <th class="header-email">Email</th>
                            <th class="header-date">Date of registration</th>
                            <th class="header-status">Status</th>
                            <th class="header-actions">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($users))
                            @foreach ($users as $user)

                                <tr>
                                    <td><input class="checkbox" type="checkbox" name="checkbox-{{ $user->id }}"
                                            id="checkbox-{{ $user->id }}" value="{{ $user->id }}"></td>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at ? $user->created_at->format('d.m.Y H:i:s') : 'Empty' }}</td>
                                    <td>Active</td>
                                    <td class="td-actions">
                                        <a href="{{'/dashboard/users/'. $user->id}}" class="btn">View</a>
                                        <a class="btn">Edit</a>
                                        <a class="btn">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="pagination__wrapper">
            {{ $users->links() }}

        </div>

@endsection
