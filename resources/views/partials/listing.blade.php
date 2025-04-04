<div class="row row-cards">
    @foreach ($spot_availabilities as $spot_availability)
        <div class="space-y">
            <div class="card">
                <div class="row g-0">
                    <div class="col-auto">
                        <div class="card-body">
                            <div class="avatar avatar-md" style="background-image: url(./static/jobs/job-2.png)">
                                {{ $spot_availability->spot?->lot_number }}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body ps-0">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-0"><a
                                            href="#">{{ $spot_availability->spot?->street_number . ' ' . $spot_availability->spot?->street_name . ' ' . $spot_availability?->spot->parish?->parish_name }}</a>
                                    </h3>
                                </div>
                                <div class="col-auto fs-3 text-green">$1,000 </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div
                                        class="mt-3 list-inline list-inline-dots mb-0 text-secondary d-sm-block d-none">
                                        <div class="list-inline-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                                <path
                                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                            </svg>
                                            {{ $spot_availability->bookings_count }} Bookings
                                        </div>
                                        <div class="list-inline-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                                <path
                                                    d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1" />
                                                <path
                                                    d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117M11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5M4 1.934V15h6V1.077z" />
                                            </svg>
                                            @if ($spot_availability->occurrence == 'weekly')
                                                {{ date('l', strtotime($spot_availability->start_date)) }}
                                                -
                                                {{ date('g:i a', strtotime($spot_availability->start_time)) }}
                                            @else
                                                {{ date('dS F Y', strtotime($spot_availability->start_date)) }}
                                                -
                                                {{ date('g:i a', strtotime($spot_availability->start_time)) }}
                                            @endif
                                        </div>
                                        <div class="list-inline-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                                                <path
                                                    d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3zm1 13h8V2H4z" />
                                                <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0" />
                                            </svg>
                                            @if ($spot_availability->occurrence == 'weekly')
                                                {{ date('l', strtotime($spot_availability->end_date)) }}
                                                -
                                                {{ date('g:i a', strtotime($spot_availability->end_time)) }}
                                            @else
                                                {{ date('dS F Y', strtotime($spot_availability->end_date)) }}
                                                -
                                                {{ date('g:i a', strtotime($spot_availability->end_time)) }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-auto">
                                    <div class="mt-3 badges">
                                        @if (Auth::check())
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#modal-booking" type="button"
                                                onclick="populateModal({{ json_encode($spot_availability->spot, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) }}, {{ json_encode(Auth::user(), JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) }})">
                                                Book Spot
                                            </button>
                                        @else
                                            <button class="btn btn-success" data-bs-toggle="modal"
                                                data-bs-target="#modal-login-required" type="button">
                                                Book Spot
                                            </button>
                                        @endif
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@include('components.booking_modal')
@include('components.loginModal')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function populateModal(spot, user) {
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
