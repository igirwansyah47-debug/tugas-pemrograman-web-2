@extends('layouts.app')

@section('content')
    <h1 class="mb-4">

        Tambah Movie

    </h1>

    <form action="{{ route('movies.store') }}" method="POST">

        @csrf

        <div class="mb-3">

            <label class="form-label">

                Category

            </label>

            <select name="category_id" class="form-select" required>

                <option value="">
                    Pilih Category
                </option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">

                        {{ $category->name }}

                    </option>
                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label">

                Judul Movie

            </label>

            <input type="text" name="title" class="form-control" required>

        </div>

        <div class="mb-3">

            <label class="form-label">

                Genre

            </label>

            <input type="text" name="genre" class="form-control" required>

        </div>

        <div class="mb-3">

            <label class="form-label">

                Tahun

            </label>

            <input type="number" name="year" class="form-control" required>

        </div>

        <div class="mb-3">

            <label class="form-label">

                Director

            </label>

            <input type="text" name="director" class="form-control" required>

        </div>

        <div class="mb-3">

            <label class="form-label">

                Durasi

            </label>

            <input type="number" name="duration" class="form-control" required>

        </div>

        <button class="btn btn-success">

            Simpan

        </button>

        <a href="{{ route('movies.index') }}" class="btn btn-secondary">

            Kembali

        </a>

    </form>
@endsection
