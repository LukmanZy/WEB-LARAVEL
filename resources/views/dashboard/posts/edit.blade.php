@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="/dashboard/posts/{{ $post->slug }}" class="mb-5" method="POST">
                @method('put')
                @csrf
                <div class="mt-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title')
                    is-invalid
                    @enderror" id="title" name="title" placeholder="Title in here" autofocus value="{{ old('title', $post->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
                        is-invalid
                    @enderror" id="slug" name="slug" placeholder="Title in here" disabled readonly value="{{ old('slug', $post->slug) }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="category" class="form-label">Category</label>
                    <select name="category_id" id="" class="form-select">
                        @foreach ($categories as $itemCategory)
                            @if (old('category_id', $post->category_id) == $itemCategory->id)
                                <option value="{{ $itemCategory->id }}" selected>{{ $itemCategory->name }}</option>
                            @else
                            <option value="{{ $itemCategory->id }}">{{ $itemCategory->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mt-3">
                    <label for="body" class="form-body @error('body')
                        is-invalid
                    @enderror">Body</label>
                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                    <trix-editor input="body"></trix-editor>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Update Post</button>
            </form>
        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title='+ title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection