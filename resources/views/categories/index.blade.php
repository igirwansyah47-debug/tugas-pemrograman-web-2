@extends('layouts.app')

@section('content')
    <h1>Data Category</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">

        Tambah Category

    </a>

    <form method="GET" class="mb-3">

        <input type="text" name="search" class="form-control" placeholder="Search category">

    </form>

    <table class="table table-bordered">

        <tr>
            <th>Nama</th>
            <th>Description</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach ($categories as $category)
            <tr>

                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->status }}</td>

                <td>

                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info btn-sm">

                        Detail

                    </a>

                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-sm">

                            Delete

                        </button>

                    </form>

                </td>

            </tr>
        @endforeach

    </table>

    {{ $categories->links() }}
@endsection
