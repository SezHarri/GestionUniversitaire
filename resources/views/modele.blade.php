<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'GestionUniversitaire')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/papp.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
</head>
<body>
@section('contenu')


    @guest()
        <div class="container mt-5">
            <h1 class="text-center">Bienvenue sur GestionUniversitaire</h1>
            <div class="menu mt-5">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('loginform')}}">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registerform')}}">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    @endguest
    @auth()
        @if(Auth::user()->isAdmin())
            <div class="container mt-5">
                <div class="menu">
                    <ul class="nav nav-pills flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">{{ Auth::user()->login}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Utilisateurs</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listetousutilisateurs')}}">Liste</a></li>
                                <li><a class="dropdown-item" href="{{route('listeUtilisateursattente')}}">Liste d'attente</a></li>
                                <li><a class="dropdown-item" href="{{route('creerutilisateursform')}}">Nouveau utilisateur</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Cours</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listecours')}}">Liste</a></li>
                                <li><a class="dropdown-item" href="{{route('creercoursform')}}">Nouveau cours</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Etudiants</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listetudiants')}}">Liste</a></li>
                                <li><a class="dropdown-item" href="{{route('creeretudiantsform')}}">Nouveau étudiant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('listeseances')}}">Emploi du temps</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Modifier mon compte</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('modifiercompteform',[Auth::user()->id])}}">Nom et prénom</a></li>
                                <li><a class="dropdown-item" href="{{route('modifiermotdepasseform')}}">Mot de passe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        @elseif(Auth::user()->Enseignant())
            <div class="container mt-5">
                <div class="menu">
                    <ul class="nav nav-pills flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">{{ Auth::user()->login}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Cours</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listcoursenseignant',[Auth::user()->id])}}">Mes cours</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Mettre à jours mon compte</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('modifiercompteform',[Auth::user()->id])}}">Nom et prénom</a></li>
                                <li><a class="dropdown-item" href="{{route('modifiermotdepasseform')}}">Mot de passe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="container mt-5">
                <div class="menu">
                    <ul class="nav nav-pills flex-column flex-sm-row">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">{{ Auth::user()->login}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Cours</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listecours')}}">Liste</a></li>
                                <li><a class="dropdown-item" href="{{route('creercoursform')}}">Nouveau cours</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Etudiants</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('listetudiants')}}">Liste</a></li>
                                <li><a class="dropdown-item" href="{{route('creeretudiantsform')}}">Nouveau étudiant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('listeseances')}}">Emplois du temps</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Mettre à jours mon compte</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('modifiercompteform',[Auth::user()->id])}}">Nom et prénom</a></li>
                                <li><a class="dropdown-item" href="{{route('modifiermotdepasseform')}}">Mot de passe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Déconnexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    @endauth
@show

@if ($errors->any())
    <div class="container mt-5">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session()->has('etat'))
    <div class="container mt-5">
        <p class="alert alert-info">{{ session()->get('etat') }}</p>
    </div>
@endif

@include('script')

</body>
</html>
