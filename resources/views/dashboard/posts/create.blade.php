@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <form action="/dashboard/posts" method="POST">
                <div class="mt-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title in here">
                </div>
                <div class="mt-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Title in here">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Created Post</button>
            </form>
        </div>
    </div>
</div>
@endsection
