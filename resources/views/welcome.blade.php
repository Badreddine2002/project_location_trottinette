<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard Registration&Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css\bootstrap.min.css')}}">
                <link rel="stylesheet" href="{{asset('css\bodywlc.css')}}">
    </head>
    <body class="b">
    <nav class="navbar navbar-expand-lg navbar-light    ">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/EASY navigation.png') }}" alt="Logo" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <button  class="btn btn-outline-info mx-2" ><a id="btno" href="{{route('register_gmao')}}" >Enregistrer </a></button>
                </li>
                <li class="nav-item">
                    <button  class="btn btn-outline-info mx-2" ><a id="btno" href="{{route('login_gmao')}}">Login </a></button>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <div class="message fade-in-up">
                Please register your information then login
            </div>
    
    </body>
</html>
