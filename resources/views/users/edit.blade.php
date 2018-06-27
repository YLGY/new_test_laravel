@extends('layouts.default')
@section('title', 'Edit Info')

@section('content')
    <form action="{{route('users.update', $user->id)}}" class="form" method="POST">
        @csrf
        @method('PATCH')
        
        <h3 class="form__header">
            Update personal info
        </h3>

        <div class="form__group">
            <a href="http://gravatar.com/emails" target="_blank">
                <img src="{{ $user->gravatar('200') }}" alt="{{ $user->name }}" class="form__avatar">
            </a>
        </div>

        @include('shared._errors');

        <div class="form__group">
            <label for="name" class="form__label">
                Name:
            </label>
            <input type="text" class="form__input" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="form__group">
            <label for="email" class="form__label">
                Email:
            </label>
            <input type="text" class="form__input" id="email" name="email" value="{{ $user->email }}" disabled>
        </div>
        <div class="form__group">
            <label for="password" class="form__label">
                Password:
            </label>
            <input type="password" class="form__input" id="password" name="password" value="{{ old('password') }}">
        </div>
        <div class="form__group">
            <label for="password_confirmation" class="form__label">
                Confirm Password:
            </label>
            <input type="password" class="form__input" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>
        <button type="submit" class="form__submit">Update</button>
    </form>
@endsection