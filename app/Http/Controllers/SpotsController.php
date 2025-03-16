<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Parishes;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
