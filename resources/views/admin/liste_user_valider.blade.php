@extends('modele')

@section('title', 'Liste des utilisateurs en attente de validation')

@section('contenu')
    <link rel="stylesheet" type="text/css" href="{{ URL::to('css/liste.css') }}">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('home') }}" class="btn btn-primary mb-3">Page principale</a>
                        <h3 class="card-title">Liste des utilisateurs non-valides</h3>

                        @if(sizeof($users) == 0)
                            <h4>Aucun utilisateur en attente de validation !</h4>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Login</th>
                                        <th scope="col">Acceptation</th>
                                        <th scope="col">Refus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->nom }}</td>
                                            <td>{{ $user->prenom }}</td>
                                            <td>{{ $user->login }}</td>
                                            <td><a href="{{ route('accepterform', [$user->id]) }}" class="btn btn-success">Accepter</a></td>
                                            <td><a href="{{ route('refuserform', [$user->id]) }}" class="btn btn-danger">Refuser</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
