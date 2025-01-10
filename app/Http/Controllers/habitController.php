<?php

namespace App\Http\Controllers;
use Thiagoprz\CompositeKey\HasCompositeKey;

use Illuminate\Http\Request;

class habitController extends Controller
{
    public function index()
    {
        // Get the currently authenticated user
        $user = auth()->user();
        
        // Fetch habits for the current user
        $habits = $user->habits;
        
        // Calculate total carbon footprint
        $totalCarbonFootprint = $habits->sum('carbon_footprint');

        // Pass data to the view
        return view('dashboard', compact('habits', 'totalCarbonFootprint'));
    }
}
