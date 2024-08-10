@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background: linear-gradient(to right, #0067A3, #66ccff); color: white;">{{ __('Liste des utilisateurs') }}</div>

                    <div class="card-body">
                        @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>

                                            <form method="POST" action="{{ route('admin.user.changeUsertype', $user->id) }}" style="display:inline;">
                                                @csrf
                                                <select name="usertype" onchange="this.form.submit()">
                                                    <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>User</option>
                                                    <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                                                </select>
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
