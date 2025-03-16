@extends('layouts.layout')

@section('title', 'Dashboard')
@section('content')

    <div class="page-body">
        <div class="container">
            <div class="row g-4">
                <div class="card">
                    <div class="row row-cards">
                        @foreach ($bookings as $booking)
                            <div class="space-y">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-auto">
                                            <div class="card-body">
                                                <div class="avatar avatar-md"
                                                    style="background-image: url(./static/jobs/job-2.png)">
                                                    #{{ $booking->spotAvailability->spot?->lot_number }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card-body ps-0">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3 class="mb-0"><a
                                                                href="#">{{ $booking->customer?->firstname . ' ' . $booking->customer?->lastname }}</a>
                                                        </h3>
                                                    </div>
                                                    <div class="col-auto fs-3 text-green">
                                                        {{ $booking->payment?->total_amount }}</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md">
                                                        <div
                                                            class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                                            <div class="list-inline-item">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-calendar4-week" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                                                                    <path
                                                                        d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                                                </svg>
                                                                {{ date('dS F Y', strtotime($booking?->start_date)) . ' ' . date('g:i a', strtotime($booking->start_time)) . ' to ' }}
                                                                {{ date('dS F Y', strtotime($booking?->end_date)) . ' ' . date('g:i a', strtotime($booking->end_time)) }}
                                                            </div>
                                                            <div class="list-inline-item">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="icon icon-inline icon-2">
                                                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                                    <path
                                                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                                                    </path>
                                                                </svg>
                                                                {{ $booking->spotAvailability?->spot?->street_address }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endsection
