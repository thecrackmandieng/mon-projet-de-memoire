@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Ajouter un Memoire') }}</div>

                <div class="card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="nom" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" value="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="theme">theme</label>
                            <input type="text" name="theme" class="form-control" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="file">Ajouter un fichier</label>
                            <input type="file" name="file" class="form-control-file">
                        </div>
                        <button type="submit" class="btn btn-success" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Ajouter</button>
                    </form>
                    <br>
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm" style="background-color: #0067A3; color: white;">Retour</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
