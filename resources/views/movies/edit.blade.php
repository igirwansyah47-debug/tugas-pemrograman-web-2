@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $movie->title }}" class="form-control mb-2">

        <input type="text" name="genre" value="{{ $movie->genre }}" class="form-control mb-2">

        <input type="number" name="year" value="{{ $movie->year }}" class="form-control mb-2">

        <input type="text" name="director" value="{{ $movie->director }}" class="form-control mb-2">

        <input type="number" name="duration" value="{{ $movie->duration }}" class="form-control mb-2">

        <button class="btn btn-warning">

            Update

        </button>

    </form>
@endsection
