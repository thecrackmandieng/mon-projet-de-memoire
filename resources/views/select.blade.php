@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                            <div class="form-group">
                                <label for="option">Options :</label>
                                <div id="option">
                                    @foreach($options as $option)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="options[]" value="{{ $option->id }}" id="option-{{ $option->id }}">
                                            <label class="form-check-label" for="option-{{ $option->id }}">
                                                {{ $option->theme }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
