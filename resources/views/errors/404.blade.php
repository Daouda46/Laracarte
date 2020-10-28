@extends('errors::layout')

@section('title', 'page d erreur')

@section('message')
Cette page n exist pas 
<p>Cliquer ici pour revenir a 👉 <a href="{{ route('home') }}">Accueil</a></p>
@stop