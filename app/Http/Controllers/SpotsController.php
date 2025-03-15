<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
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
    public function show(Request $request)
    {
        dd($request);
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
