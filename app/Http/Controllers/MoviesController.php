<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Http\Response;

class MoviesController extends Controller
{
    //Metodo para devolver todos los registros
    public function index()
    {
        $movies = Movies::all();
        return response()->json($movies, 200);
    }

    //Metodo para devolver un registro especifico indicando su id
    public function movie($id)
    {
        $movie = Movies::find($id);
        return response()->json($movie, 200);
    }

    //Metodo para insertar una nueva pelicula
    public function newMovie(Request $request)
    {
        $movie = Movies::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Pelicula agregada exitosamente',
            'data' => $movie
        ], 201);
    }

    //Actualizar pelicula
    public function updateMovie(Request $request, $id)
    {
        $movie = Movies::find($id);
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->year = $request->year;
        $movie->cover = $request->cover;
        $movie->save();
        return response()->json([
            'success' => true
        ], 200);
    }

    public function deleteMovie($id)
    {
        Movies::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);

    }
}
