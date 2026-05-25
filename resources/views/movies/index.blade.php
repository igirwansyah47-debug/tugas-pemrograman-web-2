@extends('layouts.app')

@section('content')
    <h1>Data Movie</h1>

    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">

        Tambah Movie
    </a>

    <table class="table table-bordered">

        <tr>
            <th>Judul</th>
            <th>Genre</th>
            <th>Tahun</th>
            <th>Director</th>
            <th>Durasi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($movies as $movie)
            <tr>

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

                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>
@endsection
