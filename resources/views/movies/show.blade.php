@extends('layouts.base')

@section('pageTitle','Vedi film')

@section('content')
<div>
    <h1>{{$movie->title}}</h1>
    <h4> {{$movie->director}}</h4>

</div>
    @endsection
