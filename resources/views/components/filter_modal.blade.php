<div class="modal @if($errors->any()) modal-blur fade  show d-block @endif" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('spots.search') }}" method="POST" id="search_form">
                @method('POST')
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">New Search</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Where</label>
                        <div class="row">
                            <div class="col"><input type="text" class="form-control @error('street_number')
                                is-invalid
                            @enderror" name="street_number"
                                    placeholder="Street Number Eg.29"></div>
                            <div class="col">
                                @error('street_number')
                                    <div class="is-invalid">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" placeholder="Street Name" name="street_name">
                            </div>
                            <div class="col">
                                <select name="parish_id" id="" class="form-select">
                                    <option disabled selected>Please select a parish</option>
                                    @foreach ($parishes as $item)
                                        <label class="form-check">
                                            <option value="{{ $item->id }}">{{ $item->parish_name }}</option>
                                        </label>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">When</label>
                        <div class="row mb-3">
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="From Date" name="start_date">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="To Date" name="end_date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="Start time" name="start_time">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="End time" name="end_time">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-selectgroup-boxes row mb-3">
                        <label for="" class="form-label">
                            Type of Vehicle
                        </label>
                        <div class="col-lg-4" style="height:inherit">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="class_id" value="1" class="form-selectgroup-input"
                                    checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                                        <span class="d-block text-secondary">Provide only basic data needed for the
                                            report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="class_id" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                                        <span class="d-block text-secondary">Insert charts and additional advanced
                                            analyses
                                            to be inserted in the report</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="class_id" value="1" class="form-selectgroup-input"
                                    checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                                        <span class="d-block text-secondary">Provide only basic data needed for the
                                            report</span>
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
                    <button class="btn btn-primary ms-auto" onclick="submitSearch()" type="button">
                        Submit Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function submitSearch() {
        document.getElementById('search_form').submit();
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if($errors->any())
            const modal = new bootstrap.Modal(document.getElementById('modal-report'));
            modal.show();
        @endif
    });
</script>
