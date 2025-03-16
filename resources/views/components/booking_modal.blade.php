<div class="modal modal-blur fade" id="modal-booking" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('bookings.store') }}" method="POST" id="booking_form">
                @method('POST')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Booking{{ ' - ' }}
                        <span id="street_number"></span>{{ ' ' }}
                        <span id="street_name"></span>{{ ' ' }}
                        <span id="parish"></span>
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" name="spots_availability_id" id="booking_spot_id" hidden>
                        <label for="" class="form-label">When</label>
                        <div class="row mb-3">
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="From Date"
                                    name="start_date">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="To Date"
                                    name="end_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="Start time"
                                    name="start_time">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="End time"
                                    name="end_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row mb-3">
                        <label for="" class="form-label">
                            Type of Vehicle Spot
                        </label>
                        <div class="col-lg-12" style="height:inherit">
                            <label class="form-selectgroup-item">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Case{{ ' ' }} <span
                                                id="booking_class_id"></span></span>
                                        <span class="d-block text-secondary">
                                            <span id="booking_class_description"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button class="btn btn-primary ms-auto" onclick="submitBooking()" type="button">
                        Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function submitBooking() {
        document.getElementById('booking_form').submit();
    }
</script>
