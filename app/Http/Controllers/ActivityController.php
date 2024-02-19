<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\User;

use App\Models\Activity;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::all(); // Assuming you want to fetch all activities

        return view('activities.index', compact('activities'));
    }
    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'sports' => 'required|array',
        'sports.*' => 'string',
        'availability' => 'required|array',
        'availability.*' => 'string',
    ]);

    Auth::user()->activities()->create([
        'sport' => implode(', ', $request->input('sports')),
        'availability' => implode(', ', $request->input('availability')),
    ]);

    return redirect()->route('profile')->with('success', 'Activity added successfully');
}


public function edit(Activity $activity)
{
    if (Gate::denies('update-activity', $activity)) {
        abort(403, 'Unauthorized action.');
    }

    return view('activities.edit', compact('activity'));
}

public function update(Request $request, Activity $activity)
{
    if (Gate::denies('update-activity', $activity)) {
        abort(403, 'Unauthorized action.');
    }

    $request->validate([
        'sport' => 'required|string',
        'availability' => 'required|string',
    ]);

    $activity->update([
        'sport' => $request->input('sport'),
        'availability' => $request->input('availability'),
    ]);

    return redirect()->route('profile')->with('success', 'Activity updated successfully');
}

public function destroy(Activity $activity)
{
    if (Gate::denies('delete-activity', $activity)) {
        abort(403, 'Unauthorized action.');
    }

    $activity->delete();

    return redirect()->route('profile')->with('success', 'Activity deleted successfully');
}

public function showMatches()
{
    // Get the current user's activities
    $userActivities = Auth::user()->activities;

    // Fetch other users who have activities
    $otherUsers = User::whereHas('activities')->where('id', '!=', Auth::id())->get();

    // Perform matching algorithm
    $matches = [];
    foreach ($otherUsers as $otherUser) {
        $matchedActivities = [];
        foreach ($otherUser->activities as $activity) {
            foreach ($userActivities as $userActivity) {
                // Check for matches based on sports and availability
                if (
                    $activity->sport == $userActivity->sport &&
                    $this->haveCommonAvailability($activity->availability, $userActivity->availability)
                ) {
                    $matchedActivities[] = $activity;
                }
            }
        }

        if (!empty($matchedActivities)) {
            $matches[$otherUser->name] = $matchedActivities;
        }
    }

    return View::make('activities.matches', compact('matches'));
}

// Helper function to check if there is common availability
private function haveCommonAvailability($availability1, $availability2)
{
    // Implement your logic to check for common availability (e.g., compare arrays)
    // For simplicity, let's assume the availability is stored as comma-separated values
    $days1 = explode(', ', $availability1);
    $days2 = explode(', ', $availability2);

    return count(array_intersect($days1, $days2)) > 0;
}

}