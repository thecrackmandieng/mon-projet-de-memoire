@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <!-- Entête de la carte -->
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Liste des Mémoires') }}</div>

                <!-- Corps de la carte -->
                <div class="card-body">
                    <!-- Bouton pour ajouter un nouveau mémoire -->
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Ajouter Mémoire</a>

                    <!-- Tableau pour afficher la liste des produits et des dépôts -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Résumé</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Fichier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Boucle sur les produits -->
                            @foreach ($products as $product)
                                <tr>
                                    <th scope="row">{{ $product->id }}</th>
                                    <td>{{ $product->nom }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->theme }}</td>
                                    <td>
                                        @if ($product->file_path)
                                            <!-- Lien pour télécharger le PDF -->
                                            <a href="{{ asset('storage/app/files/'.$product->file_path) }}" class="btn btn-primary btn-sm" style="background-color: #0067A3; color: white;" download>Télécharger</a>
                                        @else
                                            <span>Aucun fichier</span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach

                            <!-- Boucle sur les dépôts -->
                            @foreach ($depots as $depot)
                                <tr>
                                    <th scope="row">{{ $depot->id }}</th>
                                    <td>{{ $depot->nom }}</td>
                                    <td>{{ $depot->description }}</td>
                                    <td>{{ $depot->theme }}</td>
                                    <td>
                                        @if ($depot->file_path)
                                            <!-- Lien pour télécharger le PDF -->
                                            <a href="{{ asset('storage/'.$depot->file_path) }}" class="btn btn-primary btn-sm" style="background-color: #0067A3; color: white;" download>Télécharger</a>
                                        @else
                                            <span>Aucun fichier</span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
