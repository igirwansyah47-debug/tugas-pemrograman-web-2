@extends('layouts.app')

@section('content')
    <h1>Edit Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST">

        @csrf
        @method('PUT')

        <select name="category_id" class="form-control mb-2">

            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $movie->category_id == $category->id ? 'selected' : '' }}>

                    {{ $category->name }}

                </option>
            @endforeach

        </select>

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
