@extends('layouts.default')
@section('title', 'Update Password')

@section('content')
    <form action="{{route('password.update')}}" class="form" method="POST">
        {{ csrf_field() }}
        
        <h3 class="form__header">
            Update Password
        </h3>

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form__group">
            @if (session('status'))
                <div class="alert laert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="form__group">
            <label for="email" class="form__label">
                Email address:
            </label>
            <input type="email" class="form__input" id="email" name="email" value="{{ $email or old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__group">
            <label for="password" class="form__label">
                Password:
            </label>
            <input type="password" class="form__input" id="password" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form__group">
            <label for="password-confirm" class="form__label">
                Confirm Password:
            </label>
            <input type="password" class="form__input" id="password-confirm" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="form__submit">Reset Password</button>
    </form>
@endsection