<div class="modal modal-blur fade" id="modal-login-required" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title text-center mb-4">
                    <div class="icon mb-3 text-warning">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-circle" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                            <path d="M12 8v4" />
                            <path d="M12 16h.01" />
                        </svg>
                    </div>
                    <h3>Login Required</h3>
                    <p class="text-muted">You must be logged in to book a spot.</p>
                </div>
            </div>
            <div class="modal-footer">
                <div class="w-100">
                    <div class="row">
                        <div class="col">
                            <a href="#" class="btn w-100" data-bs-dismiss="modal">
                                Cancel
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{ route('login') }}" class="btn btn-primary w-100">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>