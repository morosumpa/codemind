<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{

    public function saveUserAnswer(Request $request){

        $user=Auth::user();

        $user->answers->attach($request->answer_id,['question_id' => $request->question_id]);


        return redirect('/');

    }
}
