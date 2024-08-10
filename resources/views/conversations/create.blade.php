@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #0067A3; color: white;">
                        <h1>Créer une nouvelle conversation</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('conversations.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="professor_id" class="form-label">Sélectionner un utilisateur</label>
                                <select name="user_id" id="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #0067A3; color: white;">Créer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
