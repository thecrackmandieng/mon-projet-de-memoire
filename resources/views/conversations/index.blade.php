@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Sujets validés') }}</div>

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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($validatedSelections as $selection)
                            <tr>
                                <td>{{ $selection->user->name }}</td>
                                <td>{{ $selection->sujet->theme }}</td>
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
