@extends('layouts.base')
@section('pageTitle','Lista film')

@section('content')

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Cover</th>
            <th scope="col">Titolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Regista</th>
            <th scope="col">Sinossi</th>
            <th scope="col">Anno</th>
            <th scope="col">Lingua</th>
            <th scope="col">Produzione</th>
            <th scope="col">Valutazione</th>
            <th scope="col">Disponibile fino al</th>
            <th scope="col">Visibile</th>
            <th>Azioni</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $movie)
            <tr>
                <td>{{$movie->id}}</td>
                <td><img src="{{$movie->cover}}" /></td>
                <td>{{$movie->genre}}</td>
                <td>{{$movie->director}}</td>
                <td>{{$movie->abstract}}</td>
                <td>{{$movie->year}}</td>
                <td>{{$movie->language}}</td>
                <td>{{$movie->production}}</td>
                <td>{{$movie->ratings}}</td>
                <td>{{$movie->expireDate}}</td>
                <td>{{$movie->visible}}</td>
                <td>
                    <a href="{{route('movies.edit',compact('movie'))}}"> Modifica</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
