@extends('index')
@section('content')

<h1>List User</h1>
@foreach ($users as $user)
    <p>Name: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <p>Color: {{ $user->color }}</p>
    <p>Age: {{ $user->age }}</p>
@endforeach

@endsection