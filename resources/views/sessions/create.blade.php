@extends('layouts.default')
@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="POST" class="form">
        @csrf

        @include('shared._errors')

        <h3 class="form__header">
            Login
        </h3>

        <div class="form__group">
            <label for="email" class="form__label">
                Email:
            </label>
            <input type="text" class="form__input" name="email" value="{{ old('email') }}">
        </div>
        <div class="form__group">
            <label for="password" class="form__label">
                Password (<a href="{{ route('password.request') }}">Forget Password</a>):
            </label>
            <input type="text" class="form__input" name="password" value="{{ old('password') }}">
        </div>

        <div class="checkbox form__group">
            <label class="form__label"><input type="checkbox" name="remember">Remember Me</label>
        </div>

        <button class="form__submit" type="submit">Login</button>
        
        <hr>
    
        <p class="form__footer">
            Still no account?
            <a href="{{ route('signup') }}">
                Register Now
            </a>
        </p>
    </form>

@endsection