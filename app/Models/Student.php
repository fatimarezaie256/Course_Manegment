<?php

namespace App\Models;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    public function user(){
        $this->belongsTo(User::class,'user_id');
    }
    public function teacher(){
        return $this->hasOneThrough(Teachers::class,Classes::class,'id','id','teacher_id');
    }
    public function subject(){
        return $this->belongsToMany(Subject::class,'grades','student_id','subject_id')->withPivot('score');
    }
}
