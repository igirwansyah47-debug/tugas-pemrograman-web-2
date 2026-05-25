@extends('layouts.app')

@section('content')
    <h1>Tambah Category</h1>

    <form action="{{ route('categories.store') }}" method="POST">

        @csrf

        <input type="text" name="name" class="form-control mb-2" placeholder="Nama Category">

        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

        <input type="text" name="status" class="form-control mb-2" placeholder="Status">

        <button class="btn btn-success">

            Simpan

        </button>

    </form>
@endsection
