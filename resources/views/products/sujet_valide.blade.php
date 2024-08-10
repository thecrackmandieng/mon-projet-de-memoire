@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">
                        {{ __('Sujets Validés') }}
                    </div>

                    <div class="card-body">
                        @if ($sujetsValides->isEmpty())
                            <p>Aucun sujet validé pour le moment.</p>
                        @else
                            <ul>
                                @foreach ($sujetsValides as $selection)
                                    <li>{{ $selection->sujet->theme }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
