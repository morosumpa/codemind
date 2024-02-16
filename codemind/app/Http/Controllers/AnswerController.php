<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{

    public function saveUserAnswer(Request $request)
    {

        $user = Auth::user();
        $answerId = $request->answer_id;
        $answer=Answer::find($answerId);
        $questionId = $request->question_id;

        
        $user->answers()->attach($answer,['question_id'=>$questionId]);

        $nextQuestion = $questionId + 1;

        return redirect('question/' . $nextQuestion);
    }

    public function checkAnswers($worldId)
    {
        $user = Auth::user();
        $questions = Question::where('world_id', $worldId)->get();

        $totalQuestions = count($questions);
        $userCorrectAnswers = 0;

        foreach ($questions as $question) {
            $userAnswer = $user->answers->where('question_id', $question->id)->first();
            if ($userAnswer && $userAnswer->isCorrect) {
                $userCorrectAnswers++;
            }
        }
       

        if ($userCorrectAnswers < 3) {

            $user->achievements()->attach(1, ['world_id' => $worldId]);
        } elseif ($userCorrectAnswers >= 3 && $userCorrectAnswers < 5) {

            $user->achievements()->attach(2, ['world_id' => $worldId]);
        } elseif ($userCorrectAnswers >= 5 && $userCorrectAnswers < 7) {

            $user->achievements()->attach(3, ['world_id' => $worldId]);
        } elseif ($userCorrectAnswers >= 7 && $userCorrectAnswers < 10) {

            $user->achievements()->attach(4, ['world_id' => $worldId]);
        } elseif ($userCorrectAnswers == 10) {

            $user->achievements()->attach(5, ['world_id' => $worldId]);
        }
        return redirect("/world/$worldId");
    }
}
