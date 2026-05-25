@extends('layouts.app')

@section('content')
    <h1>Data Movie</h1>

    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">

        Tambah Movie

    </a>

    <form method="GET" class="row mb-3">

        <div class="col-md-4">

            <input type="text" name="search" class="form-control" placeholder="Search movie">

        </div>

        <div class="col-md-4">

            <select name="category" class="form-control">

                <option value="">
                    Semua Category
                </option>

                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">

                        {{ $category->name }}

                    </option>
                @endforeach

            </select>

        </div>

        <div class="col-md-4">

            <button class="btn btn-success">

                Filter

            </button>

        </div>

    </form>

    <table class="table table-bordered">

        <tr>
            <th>Category</th>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Director</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($movies as $movie)
            <tr>

                <td>{{ $movie->category->name }}</td>

                <td>{{ $movie->title }}</td>

                <td>{{ $movie->genre }}</td>

                <td>{{ $movie->year }}</td>

                <td>{{ $movie->director }}</td>

                <td>{{ $movie->duration }}</td>

                <td>

                    <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data?')">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>

    {{ $movies->links() }}
@endsection
