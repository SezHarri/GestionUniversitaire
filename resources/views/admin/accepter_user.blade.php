@extends('modele')

@section('title', 'Acceptation des utilisateurs')

@section('contenu')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Acceptation des utilisateurs</h2>
                        <p class="card-text">Voulez-vous accepter l'utilisateur {{ $users->login }} ?</p>
                        <form action="{{ route('accepterutilisateurs', ['id' => $users->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="type">Type de l'utilisateur :</label>
                                <select id="type" name="type" class="form-control">
                                    <option value="enseignant">Enseignant</option>
                                    <option value="gestionnaire">Gestionnaire</option>
                                    <option value="admin">Admin</option>
                                    <option value="etudiant">Etudiant</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Accepter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
