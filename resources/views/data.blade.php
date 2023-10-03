@extends('index')
@section('content')

<h1>List User</h1>
<div style="display: flex; flex-wrap: wrap;">

@foreach ($users as $user)
    <div class="card m-3" style="width: 250px">
        <div class="card-body">
            <h4 class="card-title">{{ $user->name }}</h4>
            <div class="card-text">
                <p>
                    Email: {{ $user->email }} <br>
                    Color: {{ $user->color }} <br>
                    Age: {{ $user->age }} <br>
                </p>
            </div>
        </div>
    </div>
@endforeach

</div>
@endsection