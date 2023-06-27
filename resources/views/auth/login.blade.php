@extends('modele')

@section('title', 'Connexion')

@section('contenu')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('home') }}"><button class="btn btn-primary mb-4">Page principale</button></a>
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center">Connectez-vous !</h1>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="login" class="form-label">Login:</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                            </div>
                            <div class="mb-3">
                                <label for="mdp" class="form-label">Mot de passe:</label>
                                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                            </div>
                            <button type="submit" class="btn btn-primary">Se connecter</button>
                            <p class="mt-3">Vous n'avez pas de compte ? <a href="{{ route('registerform') }}">Inscrivez-vous</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
