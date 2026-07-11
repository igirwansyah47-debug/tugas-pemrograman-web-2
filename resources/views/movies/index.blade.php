@extends('layouts.app')

@section('content')
    <h1 class="mb-4">

        🎬 Data Movie

    </h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('movies.create') }}" class="btn btn-primary mb-3">

        + Tambah Movie

    </a>

    <a href="{{ route('movies.trash') }}" class="btn btn-outline-danger mb-3">

        🗑️ Trash

    </a>

    <form method="GET" class="row mb-4">

        <div class="col-md-5">

            <input type="text" name="search" class="form-control" placeholder="Cari judul movie...">

        </div>

        <div class="col-md-5">

            <select name="category" class="form-select">

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

        <div class="col-md-2">

            <button class="btn btn-success w-100">

                Filter

            </button>

        </div>

    </form>

    <table class="table table-striped table-bordered align-middle">

        <thead class="table-dark">

            <tr>

                <th>Category</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Director</th>
                <th>Synopsis</th>
                <th>Durasi</th>
                <th width="220">Aksi</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($movies as $movie)
                <tr>

                    <td>

                        {{ $movie->category ? $movie->category->name : '-' }}

                    </td>

                    <td>

                        {{ $movie->title }}

                    </td>

                    <td>

                        {{ $movie->genre }}

                    </td>

                    <td>

                        {{ $movie->year }}

                    </td>

                    <td>

                        {{ $movie->director }}

                    </td>

                    <td>

                        {{ Str::limit($movie->synopsis, 50) }}

                    </td>

                    <td>

                        {{ $movie->duration }} menit

                    </td>

                    <td>

                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info btn-sm">

                            Detail

                        </a>

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

        </tbody>

    </table>

    {{ $movies->links() }}
@endsection
