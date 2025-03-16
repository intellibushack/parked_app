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
                <div class="modal-body">
                    <h3 class="card-title mb-3">Payment Information</h3>

                    <div class="row row-cards">
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname">
                                {{-- <span class="d-block text-secondary">
                                    <span id="firstname"></span>
                                </span> --}}
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>






                    <div class="mb-3">
                        <label class="form-label">Card Information</label>
                        <div id="card-element" class="form-control" style="height: 40px; padding-top: 10px;">
                            <!-- Stripe Elements will be inserted here -->
                        </div>
                        <div id="card-errors" class="text-danger mt-2" role="alert"></div>
                        <!-- Include a hidden input for the Stripe token -->
                        <input type="hidden" name="stripeToken" id="stripe_token">
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancel
                    </a>
                    <button class="btn btn-primary ms-auto" id="submit-button" type="button">
                        Confirm Booking and Pay
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client
    // var stripe = Stripe('{{ config('services.stripe.key') }}');
    var stripe = Stripe('pk_test_51N5YKhIQ1tJbCHVBuTO2SIoKy8smwbSOEUT4WjgVdFFz2yp2eNKX52xRjqMa0Q7DKw5q5R72zIrUpN0LTcONTpSg00cQFIIXE9')
    var elements = stripe.elements();

    // Create an instance of the card Element
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    var card = elements.create('card', {
        style: style
    });

    // Add an instance of the card Element into the `card-element` div
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission
    var form = document.getElementById('booking_form');
    var submitButton = document.getElementById('submit-button');

    submitButton.addEventListener('click', function(event) {
        event.preventDefault();

        submitButton.disabled = true;

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
                submitButton.disabled = false;
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the token ID
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var hiddenInput = document.getElementById('stripe_token');
        hiddenInput.value = token.id;

        // Submit the form
        form.submit();
    }
</script>
