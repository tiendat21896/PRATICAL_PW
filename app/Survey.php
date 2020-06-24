<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = "students";

    public $fillable = [
        "Student_Name",
        "Student_Email",
        "Student_Telephone",
        "Feedback"
    ];
}
