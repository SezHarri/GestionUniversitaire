@extends('modele')

@section('title', 'Inscription')

@section('contenu')
    <div class="container mb-6">
        <div class="row justify-content-center mb-6">
            <div class="col-md-6">
                <a href="{{ route('home') }}"><button class="btn btn-primary mb-4">Page principale</button></a>
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title mb-4 text-center">Inscrivez-vous !</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nom" class="form-label">Nom :</label>
                                <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="prenom" class="form-label">Prénom :</label>
                                <input type="text" name="prenom" value="{{ old('prenom') }}" placeholder="Prénom" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="login" class="form-label">Login :</label>
                                <input type="text" name="login" value="{{ old('login') }}" placeholder="Login" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mdp" class="form-label">Mot de passe :</label>
                                <input type="password" name="mdp" placeholder="Mot de passe" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="mdp_confirmation" class="form-label">Confirmation du mot de passe :</label>
                                <input type="password" name="mdp_confirmation" placeholder="Confirmation du mot de passe" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">S'inscrire</button>
                            </div>
                        </form>
                        <p class="mt-3">Vous avez un compte ? <a href="{{ route('loginform') }}" class="text-decoration-none">Connectez-vous</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
