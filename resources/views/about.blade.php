@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
@foreach ($profiles as $item)
<h2>{{ $item->name }}</h2>
<p>{{ $item->email }}</p>
@endforeach
    <img src="images/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">
@endsection
