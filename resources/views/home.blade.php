@extends('layouts.layout')

@section('content')
    <!-- <h1>Selamat datang {{ Auth::user()->name ?? '' }}</h1> -->


    <!-- Full-viewport stage -->
    <section class="stage">
        <h1 class="stage-title mb-5">Selamat datang di galeri, {{ Auth::user()->name }}</h1>
    </section>

    <main id="main">

        <!-- Mosaic, full-bleed -->

        <section id="work" class="pt-12">
            <div class="mosaic">
                @include('components.button-add-photo')

                @foreach ($images as $image)
                    @include('components.image')
                @endforeach


            </div>
        </section>


        <div class="mt-10">

            @include('components.logout-button')
        </div>
@endsection