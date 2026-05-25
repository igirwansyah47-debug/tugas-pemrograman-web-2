@extends('layouts.app')

@section('content')
    <h1>Tambah Movie</h1>

    <form action="{{ route('movies.store') }}" method="POST">

        @csrf

        <select name="category_id" class="form-control mb-2">

            <option value="">
                Pilih Category
            </option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">

                    {{ $category->name }}

                </option>
            @endforeach

        </select>

        <input type="text" name="title" class="form-control mb-2" placeholder="Judul">

        <input type="text" name="genre" class="form-control mb-2" placeholder="Genre">

        <input type="number" name="year" class="form-control mb-2" placeholder="Tahun">

        <input type="text" name="director" class="form-control mb-2" placeholder="Director">

        <input type="number" name="duration" class="form-control mb-2" placeholder="Durasi">

        <button class="btn btn-success">

            Simpan

        </button>

    </form>
@endsection
