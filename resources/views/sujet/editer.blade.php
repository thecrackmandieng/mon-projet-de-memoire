@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Éditer un sujet') }}</div>

                <div class="card-body">
                    <form action="{{ route('edit-sujet', $sujet->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="theme">Theme</label>
                            <input type="text" name="theme" class="form-control" value="{{ $sujet->theme }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Mettre à jour</button>
                        <a href="{{ route('sujet.index') }}" class="btn btn-primary btn-sm" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Retour</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
