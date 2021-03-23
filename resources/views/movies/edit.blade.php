@extends('layouts.base')

@section('pageTitle', 'Aggiungi un film')

@section('content')
    @include('layouts.form', ["edit" => true])
@endsection
