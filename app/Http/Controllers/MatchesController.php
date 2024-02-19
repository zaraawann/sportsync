<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Support\Facades\DB;

class MatchesController extends Controller
{
    public function findMatches()
    {
        $users = User::all();

        foreach ($users as $user) {
            $userActivities = Activity::where('user_id', $user->id)->get();

            $matches = $this->findSimilarUsers($user, $userActivities);

            $user->matches = $matches;
        }

        return view('matches', compact('users'));
    }

    private function findSimilarUsers(User $user, $userActivities)
    {
        return User::where('id', '!=', $user->id)
            ->whereHas('activities', function ($query) use ($userActivities) {
                foreach ($userActivities as $activity) {
                    $query->where('sport', $activity->sport)
                        ->whereIn('availability', explode(',', $activity->availability));
                }
            })
            ->get();
    }
}
