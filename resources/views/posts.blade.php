@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

{{-- Search --}}
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="bt bg-dark text-white" type="submit" id="button-search">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        <img src="http://source.unsplash.com/500x200?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
        <div class="card-body text-center">
            <h3 class="card-title">{{ $posts[0]->title }}</h3>
            <p>
            <small class="text-muted"> By:
                <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                in
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                at {{ $posts[0]->created_at->diffForHumans() }}
            </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read more...</a>
        </div>
    </div>

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.6)">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                        {{ $post->category->name }}
                    </a>
                </div>
                <img src="http://source.unsplash.com/500x500?{{ $post->category->name }}" alt="{{ $post->category->name }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p>
                        <small class="text-muted">By:
                            <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                            at {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@else
    <p class="text-center fs-4">No post found</p>
@endif

{{ $posts->links() }}

@endsection
