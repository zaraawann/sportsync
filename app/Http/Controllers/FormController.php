<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function processForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'sports' => 'required|array',
            'home_location' => 'required|string',
            'occupation' => 'required|string',
            'occupation_location' => 'required|string',
            'off_days' => 'required|array',
            'playing_location' => 'required|string',
        ]);

        // Handle the form submission logic here
        // Access form data using $request->input('field_name')

        // For example, you can retrieve the selected sports:
        $selectedSports = $request->input('sports');

        // You can also retrieve other form fields:
        $homeLocation = $request->input('home_location');
        $occupation = $request->input('occupation');
        $occupationLocation = $request->input('occupation_location');
        $offDays = $request->input('off_days');
        $playingLocation = $request->input('playing_location');

        // Add your logic to store or process the form data

        // Redirect back or to a different page
        return redirect()->route('home')->with('success', 'Form submitted successfully!');
    }
}
