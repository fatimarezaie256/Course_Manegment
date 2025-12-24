<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('students',[StudentController::class,'index']);
Route::get('addTeacher',[TeachersController::class,'showAddForm']);
Route::post('create',[TeachersController::class,'create']);
