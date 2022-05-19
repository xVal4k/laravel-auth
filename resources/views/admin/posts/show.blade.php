@extends('layout.admin')

@section('pageTitle', $post->title)

@section('pageMain')
    <div class="container py-5 text-center">
        <div class="row g-4">
            <div class="col">
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->description }}</p>
                    <div class="row row-cols-4">
                        <div class="col"><strong>Price:</strong> {{ $post->price }} €</div>
                        <div class="col"><strong>Series:</strong> {{ $post->series }}</div>
                        <div class="col"><strong>Sale dae:</strong> {{ $post->sale_date }}</div>
                        <div class="col"><strong>Type:</strong> {{ $post->type }}</div>
                    </div>
                </div>
                <h4 class="my-4"><a class="text-decoration-none" href="{{ route('comics.edit', $comic->id) }}">Edit</a></h4>

            </div>
        </div>
        <div class="container py-5 text-center">
            <h3 class="my-4"><a class="text-decoration-none" href="{{ route('comics.index') }}">Comics List</a></h3>
        </div>
    </div>
@endsection
