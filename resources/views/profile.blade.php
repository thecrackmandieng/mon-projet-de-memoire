@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('My Profile') }}</div>

                    <div class="card-body">
                        @include('profile.update-profile-information-form')
                        @include('profile.update-password-form')
                        @include('profile.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
