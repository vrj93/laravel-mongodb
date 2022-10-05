<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movies() {
        $movies = Movie::all();

        return response(['data' => $movies, 'msg' => 'Movies fetched successfully'], 200);
    }

    public function addMovie(Request $request) {

        $data = $request->validate([
            'cast' => 'required',
            'classification' => 'required',
            'director' => 'required',
            'genres' => 'required',
            'imdb_rating' => 'required',
            'title' => 'required'
        ]);
        
        $movie = Movie::create($data);

        return response(['data' => $movie, 'msg' => 'Movie added successfully'], 201);
    }

    public function viewMovie($id) {
        $movie = Movie::find($id);

        return response(['data' => $movie, 'msg' => 'Movie details fetched successfully'], 200);
    }

    public function updateMovie(Request $request, $id) {
        
        $movie = Movie::find($id)->update($request->all());
        
        return response(['data' => $movie, 'msg' => 'Movie updated successfully'], 201);
    }

    public function deleteMovie($id) {
        Movie::find($id)->delete();
        
        return response('Movie deleted successfully', 201);
    }
}
