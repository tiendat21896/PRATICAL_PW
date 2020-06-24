<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = "students";

    public $fillable = [
        "student_name",
        "student_email",
        "student_telephone",
        "feedback"
    ];
}
