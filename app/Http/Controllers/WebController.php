<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view("Survey_Student");
    }

    public function newSurvey(){
        return view("");
    }
}
