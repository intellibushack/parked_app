<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Classes;
use App\Models\Parishes;
use App\Models\SpotAvailability;
use App\Models\Spots;
use Illuminate\Http\Request;

class SpotsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('spots.create');
        $parishes = Parishes::all();
        $classes = Classes::all();
        return view('spots.create', compact('parishes', 'classes'));
    }

    public function createAvailability()
    {
        $parishes = Parishes::all();

        return view('spots.spot_avaiability.create', compact('parishes'));
    }

    public function storeAvailability(Request $request)
    {
        SpotAvailability::create([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'occurrence' => $request->occurrence,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'spot_id' => $request->spot_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Spots::create([
            'user_id' => 1,
            'street_number' => $request->street_number,
            'street_name' => $request->street_name,
            'parish_id' => $request->parish_id,
            'lot_number' => $request->lot_number,
            'class_id' => $request->class_id
        ]);
    }

    public function renterIndex()
    {
        $parishes = Parishes::all();
        $spots = Spots::with('class', 'spotAvailabilities')
            ->withCount('spotAvailabilities')
            ->where('user_id', 1)
            ->get();

        return view('spots.index', compact('spots', 'parishes'));
    }

    public function showAvailabilityBySpot($show_id)
    {
        $parishes = Parishes::all();
        $spot_availabilities = SpotAvailability::with('spot')
            ->withCount('bookings')
            ->where('spot_id', $show_id)
            ->whereRelation('spot', 'user_id', '=', 1)
            ->get();

        return view('spots.spot_availability.index', compact('spot_availabilities', 'parishes'));
    }

    public function showAvailability()
    {
        $parishes = Parishes::all();
        $spot_availabilities = SpotAvailability::with('spot')
            ->withCount('bookings')
            ->whereRelation('spot', 'user_id', '=', 1)
            ->get();

        return view('spots.spot_availability.index', compact('spot_availabilities', 'parishes'));
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        // dd($request);
        $street_name = $request->street_name;
        $parish_id = $request->parish_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $start_time = $request->start_time;
        $end_time = $request->end_time;

        // $spots = Spots::with(['spotAvailability' => function ($query) use ($start_date, $end_date, $start_time, $end_time) {
        //     $query->whereRaw("occurrence = 'weekly' and WEEKDAY(start_date) <= WEEKDAY(?) and WEEKDAY(end_date) >= WEEKDAY(?) and start_time<=? and end_time>=? and start_date <= ? ", [$start_date, $end_date, $start_time, $end_time, $start_date])
        //         ->orWhereRaw("occurrence = 'once' and start_date <= ? and end_date>=? and start_time <= ? and end_time >=?", [$start_date, $end_date, $start_time, $end_time]);
        // }])
        //     ->has('spotAvailability')
        //     ->where(function ($query) use ($street_name, $parish_id) {
        //         $query->where('street_name', $street_name)
        //             ->orWhere('parish_id', $parish_id);
        //     })
        //     ->get();

        return redirect('/spots/results?street_name=' . $street_name . '&parish_id=' . $parish_id . '&start_date=' . $start_date . '&end_date=' . $end_date . '&start_time=' . $start_time . '&end_time=' . $end_time);
    }

    public function show_search(Request $request)
    {
        $parishes = Parishes::all();
        $street_name = $request->query('street_name');
        $parish_id = $request->query('parish_id');
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');
        $start_time = $request->query('start_time');
        $end_time = $request->query('end_time');

        $spots = Spots::with(['spotAvailability' => function ($query) use ($start_date, $end_date, $start_time, $end_time) {
            $query->whereRaw("occurrence = 'weekly' and WEEKDAY(start_date) <= WEEKDAY(?) and WEEKDAY(end_date) >= WEEKDAY(?) and start_time<=? and end_time>=? and start_date <= ? ", [$start_date, $end_date, $start_time, $end_time, $start_date])
                ->orWhereRaw("occurrence = 'once' and start_date <= ? and end_date>=? and start_time <= ? and end_time >=?", [$start_date, $end_date, $start_time, $end_time]);
        }])->with('parish', 'class')
            ->has('spotAvailability')
            ->where(function ($query) use ($street_name, $parish_id) {
                $query->where('street_name', $street_name)
                    ->orWhere('parish_id', $parish_id);
            })
            ->get();

        return view('bookings.search_results', compact('spots', 'parishes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spots $spots)
    {
        //
    }

    public function show(Spots $spots)
    {
        return "Kian";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spots $spots)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spots $spots)
    {
        //
    }
}
