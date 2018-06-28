@extends('layouts.default')
@section('title', 'Reset Password')

@section('content')
    <form action="{{route('password.email')}}" class="form" method="POST">
        {{ csrf_field() }}
        
        <h3 class="form__header">
            Reset Password
        </h3>

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
            <input type="email" class="form__input" id="email" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <button type="submit" class="form__submit">Reset Password</button>
    </form>
@endsection