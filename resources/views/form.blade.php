@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Choisir un sujet de mémoire') }}</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('select') }}">
                            @csrf
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Profil</th>
                                        <th scope="col">Choisir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($options as $option)
                                        <tr>
                                            <td>{{ $option->theme }}</td>
                                            <td>{{ $option->description }}</td>
                                            <td>{{ $option->profile }}</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="options[]" value="{{ $option->id }}" id="option-{{ $option->id }}">
                                                    <label class="form-check-label" for="option-{{ $option->id }}">Choisir</label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
