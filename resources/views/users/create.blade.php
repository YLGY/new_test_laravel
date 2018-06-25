@extends('layouts.default')

@section('title', 'Register')

@section('content')

<form action="{{route('users.store')}}" class="form" method="POST">
        {{ csrf_field() }}
        
        <h3 class="form__header">
            Sign in
        </h3>

        @include('shared._errors');

        <div class="form__group">
            <label for="name" class="form__label">
                Name:
            </label>
            <input type="text" class="form__input" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="form__group">
            <label for="email" class="form__label">
                Email:
            </label>
            <input type="text" class="form__input" id="email" name="email" value="{{ old('email') }}">
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
        <button type="submit" class="form__submit">Register</button>
    </form>
@endsection