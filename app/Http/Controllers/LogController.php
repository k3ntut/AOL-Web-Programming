<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\Habit;

class LogController extends Controller
{
    public function index()
    {
        return view('log');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'mode_of_transport' => 'required|in:walk,bike,vehicle',
            'distance' => 'required|numeric|min:0.1',
        ]);

        // Determine carbon footprint based on mode of transport
        $carbon_footprint = 0;
        $distance = $validated['distance'];

        switch ($validated['mode_of_transport']) {
            case 'walk':
                $carbon_footprint = $distance * 53 * 0.0025;
                break;
            case 'bike':
                // Biking has negligible emissions
                $emission_factor = 0.1134; // kg CO₂ per kilometer
                $carbon_footprint = $distance * $emission_factor;
                break;
            case 'vehicle':
                // Vehicle emissions calculation
                $emission_factor = 0.255; // kg CO₂ per kilometer
                $carbon_footprint = $distance * $emission_factor;
                break;
        }

        // Insert the log into the `logs` table
        $log = Log::create([
            'user_id' => auth()->id(),
            'habit' => $validated['mode_of_transport'],
            'distance_perlog' => $distance,
            'carbon_footprint' => $carbon_footprint,
            // 'log_date' => now(),
        ]);

        // Find the corresponding habit for the logged-in user
        $habit = Habit::where('user_id', auth()->id())
                      ->where('types', $validated['mode_of_transport'])
                      ->first();

        // Update the habit distance and carbon footprint if it exists
        if ($habit) {
            $habit->habit_distance += $distance;
            $habit->carbon_footprint += $carbon_footprint;
            $habit->save();
        } else {
            // If the habit record doesn't exist, create a new one
            Habit::create([
                'user_id' => auth()->id(),
                'types' => $validated['mode_of_transport'],
                'habit_distance' => $distance,
                'carbon_footprint' => $carbon_footprint,
            ]);
        }

        return redirect()->back()->with('success', 'Log added and habit updated successfully!');
    }
}