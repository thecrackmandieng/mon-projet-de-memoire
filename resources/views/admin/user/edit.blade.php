<!-- resources/views/admin/user/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div style="max-width: 400px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #f9f9f9;">
        <div class="card-header" style="background-color: #0067A3; color: white;">{{ __('editer utilisateurs') }}</div>
        <form action="{{ route('admin.user.edit', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 15px;">
                <label for="name" style="display: block; font-weight: bold;">Name:</label>
                <input type="text" id="name" name="name" value="{{ $user->name }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="email" style="display: block; font-weight: bold;">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            </div>
            <div style="margin-bottom: 15px;">
                <label for="usertype" style="display: block; font-weight: bold;">User Type:</label>
                <input type="text" id="usertype" name="usertype" value="{{ $user->usertype }}" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
            </div>
            <button type="submit" style="padding: 10px 20px; background-color: #0067A3; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
        </form>
    </div>
@endsection
