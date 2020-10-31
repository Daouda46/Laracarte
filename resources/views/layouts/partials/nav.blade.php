<nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home')}}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarsExample03">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_route_active('home') }}">
              <a class="nav-link " href="{{ route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ set_route_active('about') }}">
              <a class="nav-link" href="{{ route('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Artisans</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="planet-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
              <div class="dropdown-menu" aria-labelledby="planet-dropdown">
                <a class="dropdown-item" href="http://laravel.com">Laravel.com</a>
                <a class="dropdown-item" href="http://laravel.io">Laravel.io</a>
                <a class="dropdown-item" href="http://laracasts.com">Laracasts</a>
                <a class="dropdown-item" href="http://larajobs.com">Larajobs</a>
                <a class="dropdown-item" href="http://laravel-news.com">Laravel News</a>
                <a class="dropdown-item" href="http://larachat.com">Laratchat</a>
               
            </div>
            </li>
            <li class="nav-item {{ set_route_active('contact') }}">
                <a class="nav-link" href="{{ route('contact')}}">Contact</a>
              </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link " href="#">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
        </div>

    </div>
  </nav>

