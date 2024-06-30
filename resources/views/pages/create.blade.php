@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card" style="margin: 20px">
            
                    <div class="card-header">
                        <h3>Register new student</h3>
                    </div>
                    <div class="card-body">
                        @include('inc.messages')
                        <form action="{{ url('student/create') }}" method="POST" class="form-group">
                            @csrf
                            <label>FirstName</label><br>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter firstname"><br>
                            <label>LastName</label><br>
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Lastname"><br>
                            <div class="form-floating">
                            <textarea class="form-control" name="address" placeholder="enter your address here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Enter address</label>
                            </div>
                            <input type="submit" class="btn btn-success mt-3" value="save">
                            <a href="{{ url('/student') }}" class="btn btn-success mt-3 me-3">Back</a>
                        </form>
                    </div>
                    
        </div>
    
    </div>

@endsection
