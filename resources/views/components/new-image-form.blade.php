@extends('layouts.layout')

@section('content')
    <h1>Tambah gambar</h1>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('components.image-form')
    </form>

@endsection