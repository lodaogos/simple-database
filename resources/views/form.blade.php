@extends('index')
@section('content')

<form action="/create" method="POST">
    @csrf
    <div class="form-item">
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div class="form-item">
        <label for="email">Email:</label>
        <input type="text" name="email">
    </div>
    <div class="form-item">
        <label for="pass">Password:</label>
        <input type="password" name="pass">
    </div>
    <div class="form-item">
        <label for="color">Favorite color:</label>
        <input type="text" name="color">
    </div>
    <div class="form-item">
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit">
</form>

@endsection