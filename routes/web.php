<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//creatin the student crud routes
Route::get('student',[StudentController::class,'index']);
Route::get('student/create',[StudentController::class,'create']);
Route::post('student/create',[StudentController::class,'store']);
Route::get('student/{id}/show',[StudentController::class,'show']);
Route::get('student/{id}/edit',[StudentController::class,'edit']);
Route::put('student/{id}/edit',[StudentController::class,'update']);
Route::get('student/{id}/delete',[StudentController::class, 'destroy']);
