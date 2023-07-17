@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1>{{ $posts->title }}</h1>
            <p>
                By. <a href="/posts?author={{ $posts->author->username }}" class="text-decoration-none"> {{ $posts->author->name }}</a>
                in <a href="/posts?category={{ $posts->category->slug }}" class="text-decoration-none">{{ $posts->category->name }}</a>
                {{ $posts->created_at->diffForHumans() }}
            </p>
            <img src="http://source.unsplash.com/1200x400?{{ $posts->category->name }}" alt="{{ $posts->category->name }}" class="img-fluid">

            <article class="my-2 fs-5">
                {!! $posts->body !!}
            </article>

            <a href="/post/{{ $posts->slug }}" class="text-decortaion-none text-white btn btn-primary"> back to the post</a>
        </div>
    </div>
</div>
@endsection
