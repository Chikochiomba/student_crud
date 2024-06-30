@extends('layouts.app')
@section('content')
    <div class="card" style="margin: 20px">
        <div class="card-header">
            <h3>student details</h3>
        </div>
        <div class="card-body">
            FirstName: {{ $students->first_name }}<br>
            LastName: {{ $students->last_name }}<br>
            Address:    {{ $students->address }}<br>
            Registered_On: {{ $students->created_at }}<br>
            <a href="{{ url('/student') }}" class="btn btn-success mt-3" >Back</a>
        </div>
        

    </div>

@endsection