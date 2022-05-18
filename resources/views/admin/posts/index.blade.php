@extends('layouts.admin')

@section('pageTitle', 'Index')

@section('pageMain')
    <div class="container text-center">
        <div class="row row-cols-4 g-4 py-5">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h2 class="card-title">
                                <a class="text-decoration-none"
                                    href="{{ route('admin.posts.show', $post->id) }}">{{ $post->title }}</a>
                            </h2>
                            <div class="row row-cols-3 justify-content-center">
                                <div class="col">
                                    <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                </div>
                                <div class="col">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body text-dark">
                                                    Please confirm your choice
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('admin.posts.destroy', $post->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('admin.posts.create') }}">Add new comic</a>
        </h3>
        <h3 class="my-4"><a class="text-decoration-none" href="{{ route('admin.home') }}">Home</a></h3>
    </div>
@endsection
