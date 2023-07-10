@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $post->title }}</h1>
            <p>
                By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a>
                in <a href="/category/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
                {{ $post->created_at->diffForHumans() }}
            </p>
            <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">

            <article class="my-2 fs-5">
                {!! $post->body !!}
            </article>

            <a href="/posts" class="text-decortaion-none text-white btn btn-primary"> back</a>
        </div>
    </div>
</div>
@endsection

