@extends('modele')

@section('title', 'Création d\'utilisateurs')

@section('contenu')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a href="{{ route('home') }}" class="btn btn-primary mb-3">Page principale</a>
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Création des utilisateurs</h2>
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nom">Nom :</label>
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="{{ old('nom') }}">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom :</label>
                                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" value="{{ old('prenom') }}">
                            </div>
                            <div class="form-group">
                                <label for="login">Login :</label>
                                <input type="text" name="login" id="login" class="form-control" placeholder="Login" value="{{ old('login') }}">
                            </div>
                            <div class="form-group">
                                <label for="mdp">Mot de passe :</label>
                                <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="mdp_confirmation">Confirmation mot de passe :</label>
                                <input type="password" name="mdp_confirmation" id="mdp_confirmation" class="form-control" placeholder="Confirmation mot de passe">
                            </div>
                            <div class="form-group">
                                <label for="type">Type d'utilisateur :</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="enseignant">Enseignant</option>
                                    <option value="gestionnaire">Gestionnaire</option>
                                    <option value="admin">Admin</option>
                                    <option value="etudiant">Etudiant</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-3">Créer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
