@extends('layouts/default', ['title' => 'About'])

@section('content')
    <div class="container">
        <h2>What is {{ config('app.name') }} ?</h2>

        <p>{{ config('app.name') }} is a clone app of <a href="http://laramap.com" target="_blank">Laramap.com</a></p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="far fa-exclamation-circle" aria-hidden="true"></i></strong>
                    This app has been built by <a href="http://twitter.com/etsmo">@etsmo</a> for learning purposes.
                </p>
            </div>

        </div>

        <p>Feel free to help to improve the <a href="https://github.com/Daouda46/Laracarte/tree/main">code source</a></p>
        <hr>

        <h2>What is Laramap </h2>
        <p>Laramap is website by which {{ config('app.name') }} was inspired :)</p>
        <p>More info <a href="http://laramap.com/about">here</a></p>

        <h2>Which tools and services are used in {{ config('app.name') }}</h2>
        <p>Basically it's built on Laravel &amp; Bootstrap. There 's a bunch of services used for email and other section </p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon AWS3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravator</li>
            <li>Antony Martian's geolocalisation</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop