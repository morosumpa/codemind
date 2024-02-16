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

        $currentTier = 0;
        if ($user->achievements->isNotEmpty()) {
            foreach ($user->achievements->where('pivot.world_id', $id) as $achievement) {

                if ($achievement->tier > $currentTier) {
                    $currentTier = $achievement->tier;
                    $userAchievement = $achievement;
                }
            }

            
        } else {
            $userAchievement = null;

        }
        return view('world', compact('userAchievement','worldFirstQuestion'));
    }
}
