<!-- resources/views/sujets/ajouter.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Ajouter un sujet') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('sujet.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="theme">Titre</label>
                            <input type="text" class="form-control" id="theme" name="theme" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="profile">Profile</label>
                            <select class="form-control" id="profile" name="profile" required>
                                <option value="D2A">D2A</option>
                                <option value="SRT">SRT</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
