<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Exception;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $category = $request->category;

        $movies = Movie::with('category')
            ->when($search, function ($query) use ($search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->when($category, function ($query) use ($category) {
                return $query->where('category_id', $category);
            })
            ->paginate(5);

        $categories = Category::all();

        return view('movies.index', compact('movies', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('movies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            Movie::create($request->all());

            DB::commit();

            return redirect()->route('movies.index')->with('success', 'Movie berhasil ditambahkan.');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Gagal menambahkan movie: ' . $e->getMessage());
        }
    }

    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $categories = Category::all();

        return view('movies.edit', compact('movie', 'categories'));
    }

    public function update(Request $request, Movie $movie)
    {
        DB::beginTransaction();

        try {
            $movie->update($request->all());

            DB::commit();

            return redirect()->route('movies.index')->with('success', 'Movie berhasil diupdate.');
        } catch (Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Gagal update movie: ' . $e->getMessage());
        }
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie berhasil dihapus.');
    }

    public function trash()
    {
        $movies = Movie::onlyTrashed()->paginate(5);

        return view('movies.trash', compact('movies'));
    }

    public function restore($id)
    {
        $movie = Movie::onlyTrashed()->findOrFail($id);
        $movie->restore();

        return redirect()->route('movies.trash')->with('success', 'Movie berhasil direstore.');
    }

    public function forceDelete($id)
    {
        $movie = Movie::onlyTrashed()->findOrFail($id);
        $movie->forceDelete();

        return redirect()->route('movies.trash')->with('success', 'Movie berhasil dihapus permanen.');
    }
}