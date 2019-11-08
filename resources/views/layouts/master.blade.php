<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Sections to put the title and meta description tags -->
    <title>@yield('head-title')</title>
    <meta name="description" content=@yield('head-meta-description')>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/project-css/master-layout.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    @yield('header')
</head>


<body>


<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
<!-- <img src="{{ asset('assets/imgs/cesi_logo.png') }}" alt="Logo de l'école d'ingénieurs CESI" id="school_logo"> -->
    <a class="navbar-brand" href="/" id="navTitle">Bureau des élèves - Saint-Nazaire</a>
    <button class="navbar-toggler" id="toggle_button" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto" id="navbarUl">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Boutique</a>
            </li>
            <li class="nav-item dropdown">

                    <button class="btn dropdown-toggle eventsDropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Évènements
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="navbarEventDropdown">
                        <a class="dropdown-item" href="#">Tous les évènements</a>
                        <a class="dropdown-item" href="#">Évènements à venir</a>
                        <a class="dropdown-item" href="#">Évènements passés</a>
                    </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Espace membre</a>
            </li>
        </ul>
    </div>
</nav>

<main>

    <div id="main-wrapper" class="container">
        @yield('content')
    </div>

</main>


<!-- Footer -->
<footer class="page-footer sticky-bottom">
    <div class="row justify-content-center">
        <p>Copyright 2019 © CESI.FR</p>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
