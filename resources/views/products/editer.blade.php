@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Éditer un Memoire') }}</div>

                <div class="card-body">
                    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nom">Nom des étudiants</label>
                            <input type="text" name="nom" class="form-control" value="{{ $product->nom }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Resumé</label>
                            <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="theme">Titre</label>
                            <input type="text" name="theme" class="form-control" value="{{ $product->theme }}" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Fichier</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Mettre à jour</button>
                        <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Retour</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
