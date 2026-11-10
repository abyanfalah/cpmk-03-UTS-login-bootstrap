@extends('layouts.layout')

@section('content')
    <h1>Selamat datang {{ Auth::user()->name ?? '' }}</h1>

@endsection