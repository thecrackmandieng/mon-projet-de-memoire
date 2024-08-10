@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #0067A3; color: white;">
                        <h1>Conversation avec {{ $conversation->users->where('id', '!=', auth()->id())->first()->name }}</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-group mb-3">
                            @foreach($messages as $message)
                                <li class="list-group-item">
                                    <strong>{{ $message->sender->name }}:</strong> {{ $message->content }}
                                </li>
                            @endforeach
                        </ul>

                        <form action="{{ route('conversations.sendMessage', $conversation->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="content">Message</label>
                                <textarea name="content" id="content" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #0067A3; color: white;">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
