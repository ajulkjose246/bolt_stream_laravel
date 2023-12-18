<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin', compact('movies'));
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'language' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'video_url' => 'required',
        ]);

        Movie::create($validatedData);

        return redirect()->route('admin')->with('success', 'Movie added successfully!');
    }
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('edit', compact('movie'));
    }

    public function Mlist()
    {
        $movies = Movie::all();

        return view('Mlist', compact('movies'));
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'language' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'image_url' => 'required',
            'video_url' => 'required',
        ]);

        // Update the movie in the database
        Movie::where('id', $id)->update($validatedData);

        return redirect()->route('Mlist')->with('success', 'Movie updated successfully!');
    }
    public function destroy($id)
    {
        // Find the movie by ID and delete it
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('Mlist')->with('success', 'Movie deleted successfully!');
    }

    public function show($id)
    {
        $movie = Movie::find($id);

        if (!$movie) {
            abort(404); // Handle the case where the movie is not found
        }

        return view('movie', ['movie' => $movie]);
    }
}
