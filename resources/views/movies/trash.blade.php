@extends('layouts.app')

@section('content')
    <h1 class="mb-4">🗑️ Trash Movie</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('movies.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-striped table-bordered align-middle">
        <thead class="table-dark">
            <tr>
                <th>Judul</th>
                <th>Genre</th>
                <th>Tahun</th>
                <th>Director</th>
                <th>Synopsis</th>
                <th>Dihapus Pada</th>
                <th width="220">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->genre }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ Str::limit($movie->synopsis, 50) }}</td>
                    <td>{{ $movie->deleted_at }}</td>
                    <td>
                        <form action="{{ route('movies.restore', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-success btn-sm" onclick="return confirm('Restore data ini?')">
                                Restore
                            </button>
                        </form>

                        <form action="{{ route('movies.forceDelete', $movie->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus permanen? Data tidak bisa dikembalikan!')">
                                Hapus Permanen
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Trash kosong.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $movies->links() }}
@endsection
