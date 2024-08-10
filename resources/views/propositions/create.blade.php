@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Ajouter un Sujet') }}</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('propositions.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="theme">Titre</label>
                            <input type="text" name="theme" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="profile">Profile</label>
                            <select name="profile" class="form-control" required>
                                <option value="D2A">D2A</option>
                                <option value="SRT">SRT</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Ajouter</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
