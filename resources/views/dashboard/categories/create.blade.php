@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Cretae Post</h1>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="/dashboard/categories" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <label for="name" class="form-label">Name Category</label>
                    <input type="text" class="form-control @error('name')
                    is-invalid
                    @enderror" id="name" name="name" autofocus value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug')
                        is-invalid
                    @enderror" id="slug" name="slug" disabled readonly value="{{ old('slug') }}">
                    @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-3">Created Category</button>
            </form>
        </div>
    </div>
</div>

<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener('change', function() {
        fetch('/dashboard/categories/checkSlug?name='+ name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

</script>
@endsection
