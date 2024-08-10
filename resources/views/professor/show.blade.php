@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $professor->name }}</h1>
    <p>{{ $professor->email }}</p>
</div>
@endsection
