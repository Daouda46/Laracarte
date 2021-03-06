<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="#contact">Artisans</a></li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planète <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="http://laravel.com">Laravel.com</a></li>
                    <li><a href="http://laravel.io">Laravel.io</a></li>
                    <li><a href="http://laracasts.com">Laracasts</a></li>
                    <li><a href="http://larajobs.com">Larajobs</a></li>
                    <li><a href="http://laravel-news.com">Laravel News</a></li>
                    <li><a href="http://larachat.com">Laratchat</a></li>
                   
                </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Register</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>