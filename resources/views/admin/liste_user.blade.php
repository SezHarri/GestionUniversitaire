@extends('modele')

@section('title', 'Liste des utilisateurs')

@section('contenu')

<a href="{{ route('home') }}" class="btn btn-light" style="color:black;">Page principale</a><br><br>

<form action="{{ route('rechercherutilisateurs') }}" method="get" class="mb-3">
    @csrf
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Rechercher un utilisateur...">
        <button type="submit" class="btn btn-primary">Recherche</button>
    </div>
</form>

<div class="dropdown mb-3">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Filtrer
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="{{ route('listetousutilisateurs') }}">Integrale</a></li>
        <li><a class="dropdown-item" href="{{ route('listeadmin') }}">Admin</a></li>
        <li><a class="dropdown-item" href="{{ route('filtrerutilisateursenseignant') }}">Enseignant</a></li>
        <li><a class="dropdown-item" href="{{ route('filtrerutilisateursgestionnaire') }}">Gestionnaire</a></li>
    </ul>
</div>

<h3>Liste des utilisateurs</h3>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Login</th>
                <th>Type</th>
                <th>Modification</th>
                <th>Suppression</th>
                <th>Liste</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->type }}</td>
                <td><a href="{{ route('modifierutilisateursform', [$user->id]) }}" class="btn btn-primary">Modifier</a></td>
                <td><a href="{{ route('refuserform', [$user->id]) }}" class="btn btn-danger">Supprimer</a></td>
                @if($user->type == 'enseignant')
                <td><a href="{{ route('listcoursenseignant', [$user->id]) }}" class="btn btn-info">Cours associe</a></td>
                @else
                <td></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
