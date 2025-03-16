@extends('layouts.layout')

@section('title', 'Search Results')
@section('content')

@include('partials.messages')
    <div class="page-body">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3">
                    <form action="./" method="get" autocomplete="off" novalidate="" class="sticky-top">
                        <div class="form-label">Filter By Parish</div>
                        <div class="mb-4">

                            {{-- @foreach ($parishes as $item)
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" name="form-type[]" value="1">
                                    <span class="form-check-label">{{ $item->parish_name }}</span>
                                </label>
                            @endforeach --}}
                        </div>
                        <div class="form-label">Parking Prices</div>
                        <div class="mb-4">
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="1"
                                    checked="">
                                <span class="form-check-label">$1000 per hour</span>
                            </label>
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="2"
                                    checked="">
                                <span class="form-check-label">$2000 per hour</span>
                            </label>
                            <label class="form-check">
                                <input type="radio" class="form-check-input" name="form-salary" value="3">
                                <span class="form-check-label">&gt; $2000</span>
                            </label>
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary w-100">Confirm changes</button>
                            <a href="#" class="btn btn-link w-100"> Reset to defaults </a>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row row-cards">
                        <div class="space-y">
                            @foreach ($spots as $spot)
                                @if (!empty($spot->spotAvailability))
                                    <div class="card">
                                        <div class="row g-0">
                                            <div class="col-auto">
                                                <div class="card-body">
                                                    <div class="avatar avatar-md"
                                                        style="background-image: url(./static/jobs/job-2.png)">
                                                        {{ $spot->lot_number }}</div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card-body ps-0">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h3 class="mb-0"><a
                                                                    href="#">{{ $spot->street_number . ' ' . $spot->street_name . ' ' . $spot->parish?->parish_name }}</a>
                                                            </h3>
                                                        </div>
                                                        <div class="col-auto fs-3 text-green">$140,000 - $180,000</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md">
                                                            <div
                                                                class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                                                <div class="list-inline-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-door-open" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                                                        <path
                                                                            d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                                                                    </svg>
                                                                    @if ($spot->spotAvailability?->occurrence == 'weekly')
                                                                        {{ date('l', strtotime($spot->spotAvailability?->start_date)) }}
                                                                        -
                                                                        {{ date('g:i a', strtotime($spot->spotAvailability?->start_time)) }}
                                                                    @else
                                                                        {{ date('dS F Y', strtotime($spot->spotAvailability?->start_date)) }}
                                                                        -
                                                                        {{ date('g:i a', strtotime($spot->spotAvailability?->start_time)) }}
                                                                    @endif
                                                                </div>
                                                                <div class="list-inline-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-door-closed" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                                                                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                                                                    </svg>
                                                                    @if ($spot->spotAvailability?->occurrence == 'weekly')
                                                                        {{ date('l', strtotime($spot->spotAvailability?->end_date)) }}
                                                                        -
                                                                        {{ date('g:i a', strtotime($spot->spotAvailability?->end_time)) }}
                                                                    @else
                                                                        {{ date('dS F Y', strtotime($spot->spotAvailability?->end_date)) }}
                                                                        -
                                                                        {{ date('g:i a', strtotime($spot->spotAvailability?->end_time)) }}
                                                                    @endif
                                                                </div>
                                                                <div class="list-inline-item">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                                                    </svg>
                                                                    Class
                                                                    {{ $spot->class_id }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-auto">
                                                            <div class="mt-3 badges">
                                                                @if(Auth::check())
                                                                    <button class="btn btn-success"
                                                                        data-bs-toggle="modal" 
                                                                        data-bs-target="#modal-booking"
                                                                        type="button"
                                                                        onclick="populateModal({{ json_encode($spot, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) }}, {{ json_encode(Auth::user(), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) }})">
                                                                        Book Spot
                                                                    </button>
                                                                @else
                                                                    <button class="btn btn-success"
                                                                        data-bs-toggle="modal" 
                                                                        data-bs-target="#modal-login-required"
                                                                        type="button">
                                                                        Book Spot
                                                                    </button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@include('components.booking_modal')
@include('components.loginModal')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function populateModal(spot,user) {
        console.log(user.firstname);
        document.getElementById('street_number').innerHTML = spot.street_number;
        document.getElementById('street_name').innerHTML = spot.street_name;
        document.getElementById('parish').innerHTML = spot.parish.parish_name;
        document.getElementById('booking_spot_id').value = spot.spot_availability.id;
        document.getElementById('booking_class_id').innerHTML = spot.class.id;
        document.getElementById('firstname').value = user.firstname
        document.getElementById('lastname').value = user.lastname
        document.getElementById('email').value = user.email
        min_height_text = spot.class.min_height != null ? ("Height: over " + spot.class.min_height + "m <br/>") : "";
        max_height_text = spot.class.max_height != null ? ("Height: under " + spot.class
            .max_height + "m <br/>") : "";

        min_length_text = spot.class.min_length != null ? ("Length: over " + spot.class
                .min_length + "m <br/>") :
            "";
        max_length_text = spot.class.max_length != null ? ("Length: under " + spot.class
            .max_length + "m <br/>") : "";
        document.getElementById('booking_class_description').innerHTML = min_height_text + max_height_text +
            min_length_text +
            max_length_text;
    }
</script>
