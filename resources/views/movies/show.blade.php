@extends('layouts.app')

@section('content')
    <h1>Detail Movie</h1>

    <div class="card">

        <div class="card-body">

            <h3>{{ $movie->title }}</h3>

            <p>
                Category :
                {{ $movie->category->name }}
            </p>

            <p>
                Genre :
                {{ $movie->genre }}
            </p>

            <p>
                Tahun :
                {{ $movie->year }}
            </p>

            <p>
                Director :
                {{ $movie->director }}
            </p>

            <p>
                Durasi :
                {{ $movie->duration }} menit
            </p>

        </div>

    </div>

    <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-3">

        Kembali

    </a>
@endsection
