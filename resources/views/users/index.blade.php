@extends('layouts.default')
@section('title', 'Users List')

@section('content')
    <div class="col-md-8 offset-md-2 list-container">
        <h2>Users List</h2>
        <ul class="list">
            @foreach ($users as $user)
                @include('users._user')
            @endforeach
        </ul>

        {{-- {!!  $users->render() !!} --}}
        {{ $users->links() }}
    </div>
@endsection