@extends('index')
@section('content')

<form action="/create" method="POST" class=" col-5 border p-4 mx-auto">
    @csrf
    <div class="form-item my-2">
        <label for="name"><h4>Name:</h4></label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-item my-2">
        <label for="email"><h4>Email:</h4></label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="form-item my-2">
        <label for="pass"><h4>Password:</h4></label>
        <input type="password" name="pass" class="form-control">
    </div>
    <div class="form-item my-2">
        <label for="color"><h4>Favorite color:</h4></label>
        <input type="text" name="color" class="form-control">
    </div>
    <div class="form-item my-2">
        <label for="age"><h4>Age:</h4></label>
        <input type="text" name="age" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary my-2">
</form>

@endsection