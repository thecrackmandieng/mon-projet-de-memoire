<!-- resources/views/products/consulter.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Sujets sélectionnés par les utilisateurs') }}</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Utilisateur</th>
                                <th scope="col">Sujet</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($selections as $selection)
                            <tr>
                                <td>{{ $selection->user->name }}</td>
                                <td>
                                    @if($selection->sujet)
                                        {{ $selection->sujet->theme }}
                                    @else
                                        Sujet non défini
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <form method="POST" action="{{ route('admin.sujet_selections.confirm', $selection->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-success" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Valider</button>
                                        </form>
                                        <form method="POST" action="{{ route('admin.sujet_selections.reject', $selection->id) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-warning" style="background-color: #a30000; color: white;">Rejeter</button>
                                        </form>

                                    </div>
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
