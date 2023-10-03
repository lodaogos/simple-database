@extends('index')
@section('content')

<h1>List Jobs</h1>
<div style="display: flex; flex-wrap: wrap;">

@foreach ($Jobs as $job)
    <div class="card m-3" style="width: 250px">
        <div class="card-body">
            <h4 class="card-title">{{ $job->position }}</h4>
            <div class="card-text">
                <p>
                    Company: {{ $job->company }} <br>
                    Salary: {{ $job->salary }} <br>
                </p>
            </div>
        </div>
    </div>
@endforeach

</div>
@endsection