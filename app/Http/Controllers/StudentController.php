<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //creating different function to handle the routes
    public function index(){
        $students = Student::all();
        return view('pages.index')->with('students', $students);
    }
    public function create(){
        return view('pages.create');
    }
    public function store(Request $request){
        $request->validate([
            'fname'=>'required|string|max:191',
            'lname'=>'required|string|max:191',
            'address'=>'required'

        ]);
        //we save the data in database
        Student::create([
            'first_name'=>$request->fname,
            'last_name'=>$request->lname,
            'address'=>$request->address
        ]);
        return redirect('/student')->with('success', 'student added successfully');

    }
    public function show($id){
        $students = Student::find($id);
        return view('pages.show')->with('students',$students);

    }
    public function edit(int $id){
        $students = Student::find($id);
        return view('pages.edit')->with('students',$students);
    }
    public function update(Request $request, int $id){
        $request->validate([
            'fname'=>'required|string|max:191',
            'lname'=>'required|string|max:191',
            'address'=>'required'

        ]);
        
        Student::find($id)->update(
            [
                'first_name'=>$request->fname,
                'last_name'=>$request->lname,
                'address'=>$request->address
            ]
        );
        return redirect()->back()->with('success','student data updated successfully');


    }
    public function destroy(int $id){
        $students = Student::find($id);
        $students->delete();
        
        return redirect()->back()->with('success','student data deleted successfully');

    }
}
