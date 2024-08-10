@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Liste des utilisateurs') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Type d'utilisateur</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->usertype }}</td>
                                        <td>
                                            <a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-primary" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">Éditer</a>
                                            <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"  onclick="return confirm('Etes-vous sûr de supprimer')" style="background-color: #a30000; color: white;">Supprimer</button>
                                            </form>
                                        </td>
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
