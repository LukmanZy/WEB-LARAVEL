@extends('layouts.main')

@section('container')

<div class="row text-center justify-content-center">
    <div class="col-lg-5">
        <main class="form-signin mt-5">

            {{-- allert --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <h1 class="h3 mb-3 fw-normal"> Please Login</h1>
            <form>
                <div class="form-floating">
                    <input type="emial" class="form-control" id="email" name="email" placeholder="mail@exapmle.com">
                    <label for="email">Email Address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="your password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
            <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
        </main>
    </div>
</div>

@endsection
