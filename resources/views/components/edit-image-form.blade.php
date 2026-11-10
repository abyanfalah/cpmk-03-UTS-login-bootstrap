@extends('layouts.layout')

@section('content')
    <div class="d-flex justify-content-between align-">
        <h1>Edit gambar</h1>


        @include('components.delete-confirmation')
    </div>


    <img class="my-10" src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}" width="200" height="200"
        loading="eager">


    <form action="{{ route('images.update', $image) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('components.image-form')
    </form>

@endsection
