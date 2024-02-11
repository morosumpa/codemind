<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show($id){
        $question=Question::find($id);

        $answers=Answer::where('question_id',$question->id)->get();

        return view('quizz',compact('question','answers'));

    }
}
