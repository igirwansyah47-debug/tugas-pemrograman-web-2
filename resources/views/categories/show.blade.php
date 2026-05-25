@extends('layouts.app')

@section('content')
    <h1>Detail Category</h1>

    <div class="card">

        <div class="card-body">

            <h3>{{ $category->name }}</h3>

            <p>
                {{ $category->description }}
            </p>

            <p>
                Status: {{ $category->status }}
            </p>

        </div>

    </div>

    <h3 class="mt-4">Daftar Movie</h3>

    <table class="table table-bordered">

        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
        </tr>

        @foreach ($movies as $movie)
            <tr>

                <td>{{ $movie->title }}</td>

                <td>{{ $movie->genre }}</td>

                <td>{{ $movie->year }}</td>

            </tr>
        @endforeach

    </table>

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">

        Kembali

    </a>
@endsection
