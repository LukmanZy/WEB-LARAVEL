@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>{{ $posts->title }}</h1>
            <a href="/posts" class="btn btn-success">Back to all Posts</a>
            <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button onclick="return confirm('are you sure ?')" class="btn btn-danger">Delete</button>
            </form>
            <p>
                By. <a href="/posts?author={{ $posts->author->username }}" class="text-decoration-none"> {{ $posts->author->name }}</a>
                in <a href="/posts?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a>
                {{ $posts->created_at->diffForHumans() }}
            </p>
            @if ($posts->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$posts->image) }}" alt="{{ $posts->category->name }}" class="img-fluid">
            </div>
            @else
            <img src="http://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">
            @endif


            <article class="my-2 fs-5">
                {!! $posts->body !!}
            </article>

            <a href="/post/{{ $posts->slug }}" class="text-decortaion-none text-white btn btn-primary"> back to the post</a>
        </div>
    </div>
</div>
@endsection
