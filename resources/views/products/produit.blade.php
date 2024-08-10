<!-- memoires/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Liste de vos mémoires') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Theme</th>
                                    <!-- Ajoutez d'autres en-têtes de colonnes si nécessaire -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($memoires as $memoire)
                                    <tr>
                                        <td>{{ $memoire->nom }}</td>
                                        <td>{{ $memoire->description }}</td>
                                        <td>{{ $memoire->theme }}</td>
                                        <!-- Ajoutez d'autres colonnes si nécessaire -->
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
