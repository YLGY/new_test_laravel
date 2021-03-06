@extends('layouts.default')

@section('title', $user->name)

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="col-md-12">
                <div class="offset-md-2 col-md-8">
                    <sectioin class="user_info">
                        @include('shared._user_info', ['user' => $user])
                    </sectioin>
                </div>
            </div>
            <div class="col-md-12">
                @if (count($statuses) > 0)
                    <ol class="statuses">
                        @foreach ($statuses as $status)
                            @include('statuses._status')
                        @endforeach
                    </ol>
                    {!! $statuses->render() !!}
                @endif
            </div>
        </div>
    </div>
@endsection