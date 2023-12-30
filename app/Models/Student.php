<?php

namespace App\Models;

use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function getClass(){
        return $this->belongsTo(SchoolClass::class, 'scholl_class_id');
    }
}
