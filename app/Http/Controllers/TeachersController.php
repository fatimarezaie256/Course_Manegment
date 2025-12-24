<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Image;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function showAddForm(){
          $users =  User::all();
      return view('teacher.add',compact('users'));
    }
   public function create(Request $request){
     $teacher =  new Teachers();
     $request->validate([
        "name"=>"required|min:3|max:30",
        "phoneNumber"=>"required|min:10|max:14",
        "image"=>"nullable|mimes:png,jpg,gif,jpeg",
     ]);
     $path = null;
     

   }
}
