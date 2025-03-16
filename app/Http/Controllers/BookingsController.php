<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Payments;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class BookingsController extends Controller
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
        // dd($request);
        Bookings::create([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'spots_availability_id' => $request->spots_availability_id
        ]);

        // Check availability

        //Make payment 

       Stripe::setApiKey('sk_test_51N5YKhIQ1tJbCHVBNqTebnS1k44zZX6ej6KTHj59KOWRBoJmhut1CMI1CktovetW0wiWNGHOrSvfWfFrWgXWvav600ZdoHjOdv');

       $token = $_POST['stripeToken'];

       $charge = Charge::create([
            'amount' => 10 * 100,
            'currency' => 'usd',
            'description' => 'parked',
            'source' => $token,
            'metadata' => ['order_id',3434],
            //'customer' => $request->firstname

       ]);

       $booking_id = Payments::insertGetId([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'total_amount' => 10,
            'payment_type' => 'Stripe',
            'invoice_no' => 'PAR' . mt_rand(10000000,90000000),
            'booking_date' => Carbon::now(),
    
       ]);

       //Redirect to success 

       return redirect()
                ->route('dashboard')
                ->with('success', 'You have been booked for the spot');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookings $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookings $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bookings $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookings $bookings)
    {
        //
    }
}
