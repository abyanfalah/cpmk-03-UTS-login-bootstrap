@extends('layouts.layout')



@section('content')
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="d-flex flex-column">
            <h1>{{ config('app.name') }}</h1>

            @include('components.login-form')
        </div>
    </div>
@endsection