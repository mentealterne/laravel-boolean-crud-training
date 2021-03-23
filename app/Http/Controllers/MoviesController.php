<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();


        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateMovie($request);

        $data = $request->all();

        $movie = new Movie();
        $movie->fill($data);
        $movie->save();
        $newMovie = Movie::orderBy('id','DESC')->first();
        return redirect()->route('movies.show',$newMovie);

    }

    /**
     * Display the specified resource.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show',  compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $this->validateMovie($request);

        $data = $request->all();

        $movie->update($data);

        return redirect()->route('movies.show',compact('movie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect()->route('movies.index');
    }

    protected function validateMovie(Request $request) {

        $request->validate([
            "title" =>'required|max:255',
            "genre" => 'required|max:255',
            "director" =>'required|max:255',
            "abstract" => 'required|max:255',
            "production" => 'required|max:255',
            "language" => 'required|max:255',
            "cover" => 'required|url',
            "ratings" => 'required|numeric|between:0,10',
            "year" => 'required|numeric|between:1895,2022',
            "visible" => "required|numeric"
        ]);
    }
}
