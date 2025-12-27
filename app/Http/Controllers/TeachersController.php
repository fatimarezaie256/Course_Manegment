<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Images;
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
     if($request->hasFile("image")){
        $path = $request->file("image")->store("images","public");
   }
   $teacher->name = $request->name;
   $teacher->phoneNumber = $request->phoneNumber;
   $teacher->user_id = $request->user_id;
    $teacher->save();
  $image = new Images();
  $image->path = $path;
  $image->imageable_id = $teacher->id;
  $image->imageable_type = Teachers::class;
  $image->Save();
  return redirect('/');
}
}