<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="POST">
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
                            <div class="col"><input type="text" class="form-control" name=""
                                    placeholder="Street Number Eg.29"></div>
                            <div class="col"><input type="text" class="form-control" placeholder="Street Name">
                            </div>
                            <div class="col">
                                <select name="" id="" class="form-select">
                                    <option disabled selected>Please select a parish</option>
                                    @foreach ($parishes as $item)
                                        <label class="form-check">
                                            <option value="{{ $item->id }}">{{ $item->parish_name }}</option>
                                        </label>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <input type="text" class="form-control" name="example-text-input" placeholder="Your report name"> --}}
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">When</label>
                        <div class="row mb-3">
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="From Date">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="date" class="form-control" placeholder="To Date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="Start time">
                            </div>
                            <div class="col-md-2 text-center">To</div>
                            <div class="col-md-5"><input type="time" class="form-control" placeholder="End time">
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
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
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
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
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
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input"
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
                    {{-- <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Create new report
                    </a> --}}
                    <button class="btn btn-primary ms-auto" type="submit">
                        Submit Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
