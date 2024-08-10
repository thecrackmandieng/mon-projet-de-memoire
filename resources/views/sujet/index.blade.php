@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Liste des sujets') }}</div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Profile</th>
                                <th scope="col">Actions</th> <!-- Ajout de la colonne pour les actions -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sujets as $sujet)
                            <tr>
                                <td>{{ $sujet->id }}</td>
                                <td>{{ $sujet->theme }}</td>
                                <td>{{ $sujet->description }}</td>
                                <td>{{ $sujet->profile }}</td>
                                <td>
                                    <!-- Ajout d'un lien ou d'un bouton pour supprimer le sujet -->
                                    <form method="POST" action="{{ route('delet-sujet', $sujet->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Etes-vous sûr de supprimer')" style="background-color: #a30000; color: white;">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="text-center">
                        <a href="{{ route('sujet.ajouter') }}" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Ajouter un sujet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
