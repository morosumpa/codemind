<?php

namespace App\Http\Controllers;

use App\Models\World;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorldController extends Controller
{
    //

    public function show($id)
    {
        $world = World::find($id);
        $user = Auth::user();
        $worldFirstQuestion = $world->questions->first();


        if ($user->achievements->isNotEmpty()) {
            $userAchievement = $user->achievements->where('pivot.world_id', $id)->first();
            return view('world', compact('userAchievement', 'worldFirstQuestion'));
        } else {
            return view('world', compact('worldFirstQuestion'));
        }
    }
}
