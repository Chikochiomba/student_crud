@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin: 20px">
          <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>STUDENT REGISTRATION MANAGEMENT SYSTEM</h2>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-success" href={{ url('/student/create') }} role="button">add new</a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">FirstName</th>
                                      <th scope="col">LastName</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @if(count($students)>0)
                                        @foreach($students as $student)
                                            <tr>
                                                <th scope="row">{{ $student->id }}</th>
                                                <td>{{ $student->first_name }}</td>
                                                <td>{{ $student->last_name }}</td>
                                                <td>{{ $student->address }}</td>
                                                <td>
                                                    
                                                    <a class="btn btn-success btn-sm" href="{{ url('student/'.$student->id.'/show' )}}" role="button">View</a>
                                                    <a class="btn btn-warning btn-sm" href="{{ url('student/'.$student->id.'/edit') }}" role="button">Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="{{ url('student/'.$student->id.'/delete') }}" role="button">Delete</a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                  </tbody>
                            </table>
                        </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
