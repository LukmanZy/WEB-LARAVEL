@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="/dashboard/posts" method="POST">
                @csrf
                <div class="mt-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title')
                    is-invalid
                    @enderror" id="title" name="title" placeholder="Title in here" autofocus value="{{ old('title') }}">
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
                    @enderror" id="slug" name="slug" placeholder="Title in here" disabled readonly value="{{ old('slug') }}">
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
                            @if (old('category_id') == $itemCategory->id)
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
                    <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Created Post</button>
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
