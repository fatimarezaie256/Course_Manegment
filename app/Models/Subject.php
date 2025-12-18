<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    const math = "Math";
    const science = "Science";
    const art = "Art";
    const dari = "Dari";
    const english = "English";
    const pashtoo = "Pashtoo";
    const bilogy= "Biology";
    const juology = "Jiuology";
    const chemical = "Chemical";
}
