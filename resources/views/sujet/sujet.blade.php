@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Liste des Sujets') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($sujet as $sujet)
                                <li class="list-group-item">{{ $sujet->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
