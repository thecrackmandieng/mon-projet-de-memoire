@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Résultats de la recherche pour "{{ request('query') }}"</h2>

    @if($results->isEmpty())
        <p>Aucun résultat trouvé.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td>{{ $result->name }}</td>
                        <td>{{ $result->description }}</td>
                        <td>{{ $result->price }}</td>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
