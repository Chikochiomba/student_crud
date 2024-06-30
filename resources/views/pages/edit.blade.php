@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card" style="margin: 20px">
        
                <div class="card-header">
                    <h3>Update student Records</h3>
                </div>
                <div class="card-body">
                    @include('inc.messages')
                    <form action="{{ url('student/'.$students->id.'/edit') }}" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <input type="hidden"  name="id" class="form-control" placeholder="Enter firstname" value="{{ $students->id }}"><br>
                        <label>FirstName</label><br>
                        <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter firstname" value="{{ $students->first_name }}"><br>
                        <label>LastName</label><br>
                        <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter Lastname" value="{{ $students->last_name }}"><br>
                        <div class="form-floating">
                        <textarea class="form-control" name="address" placeholder="enter your address here"  id="address" style="height: 100px">{{ $students->address }}</textarea>
                            
                        </div>
                        <input type="submit" class="btn btn-success mt-3" value="Update">
                        <a href="{{ url('/student') }}" class="btn btn-success mt-3 me-3">Back</a>

                    </form>
                </div>
                
    </div>

</div>



@endsection