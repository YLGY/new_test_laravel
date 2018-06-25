@extends('layouts.default')

@section('title', $user->name)

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="col-md-12">
                <col-md-8 class="offset-md-2">
                    <sectioin class="user_info">
                        @include('shared._user_info', ['user' => $user])
                    </sectioin>
                </col-md-8>
            </div>
        </div>
    </div>
@endsection