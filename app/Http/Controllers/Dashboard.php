<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parishes;
use App\Models\SpotAvailability;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index()
    {
        // $parishes = Parishes::all();
        $parishes = Parishes::all();
        $spot_availabilities = SpotAvailability::with('spot')
            ->withCount('bookings')
            //->whereRelation('spot', 'user_id', '=', 1)
            ->get();

        return view('dashboard', compact('spot_availabilities', 'parishes'));
        //return view('dashboard',compact('parishes'));
    }
}

