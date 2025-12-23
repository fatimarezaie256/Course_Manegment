<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function showAddForm(){
          $users =  User::all();
      return view('teacher.add',compact('users'));
    }
}
