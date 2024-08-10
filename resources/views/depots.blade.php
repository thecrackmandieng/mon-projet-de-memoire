@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">
                        {{ __('Déposer un mémoire') }}
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('depots.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="nom">Nom des étudiants</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Resumé</label>
                                <textarea name="description" class="form-control" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="theme">Titre</label>
                                <input type="text" name="theme" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="file">Ajouter un fichier</label>
                                <input type="file" name="file" class="form-control-file" required>
                            </div>

                            <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">
                                {{ __('Déposer') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
