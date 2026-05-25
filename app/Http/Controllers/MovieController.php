<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Category;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('movies.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movie::create($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        $categories = Category::all();

        return view('movies.edit', compact('movie', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());

        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }
}