<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AchievementController extends Controller
{
    public function unlockAchievement(Request $request)
    {
        $user = Auth::user();

        $questionId=$request->question10Id;

        $worldId=Question::find($questionId);

        $user->achievements->attach();

        // Devuelve la ruta de los mundos
        return view('welcome');
    }
    public function getAchievements()
    {
        $user = Auth::user();

        $userAchievements=$user->achievements->paginate(5);

        // Devuelve la vista de visualizar logros
        return view('main',compact('userAchievements'));
    }
}
