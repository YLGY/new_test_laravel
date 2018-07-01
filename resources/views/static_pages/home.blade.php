@extends('layouts.default')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form mb-5">
                    @include('shared._status_form')
                </section>

                <h3>Weibo List</h3>
                @include('shared._feed')
            </div>
            <div class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => Auth::user()])
                </section>
            </div>
        </div>
    @else
        <div class="jumbotron">
            <h1>Hello Laravel</h1>
            <p class="lead">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus aliquid reiciendis placeat ipsum cumque nihil asperiores doloremque, quod ea animi facere tenetur repellendus dolorem inventore sapiente praesentium voluptas quis sit.
            </p>
            <p>
                New start, keep fighting
            </p>
            <p>
                <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">Register</a>
            </p>
        </div>
    @endif

@endsection