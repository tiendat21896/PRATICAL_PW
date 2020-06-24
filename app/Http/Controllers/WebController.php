<?php

namespace App\Http\Controllers;

use App\Survey;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function survey(){
        return view("survey_student");
    }

    public function saveSurvey(Request $request){
       $survey = new Survey;

       $survey->student_name = $request->student_name;
       $survey->student_email = $request->student_email;
       $survey->student_telephone = $request->student_telephone;
       $survey->feedback = $request->feedback;
       $survey->save();

       return response()->json(['success'=>'Form is successfully submited!!!']);
    }
}
