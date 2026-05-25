@extends('layouts.app')

@section('content')
    <h1>Edit Category</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $category->name }}" class="form-control mb-2">

        <textarea name="description" class="form-control mb-2">{{ $category->description }}</textarea>

        <input type="text" name="status" value="{{ $category->status }}" class="form-control mb-2">

        <button class="btn btn-warning">

            Update

        </button>

    </form>
@endsection
