@extends('layouts.layout')

@section('title', 'Dashboard')
@section('content')

    <div class="page-body">
        <div class="container">
            <div class="row g-4">
                <div class="card">
                    <form action="{{ route('spots.availability.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="card-header">
                            <h3 class="m-0">
                                Add New Spot Availability
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <label for="" class="form-label">Occurrence</label>
                                <select name="occurrence" id="" class="form-select">
                                    <option disabled selected>Please select occurrence</option>
                                    <option value="once">Once</option>
                                    <option value="weekly">Weekly</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="" class="form-label">Duration of Renting</label>
                                <div class="row justify-content-between mb-3">
                                    <div class="col-md-5">
                                        <input type="date" class="form-control" name="start_date" placeholder="">
                                    </div>
                                    <div class="col-md-1 text-center">
                                        To
                                    </div>
                                    <div class="col-md-5">
                                        <input type="date" class="form-control" placeholder="" name="end_date">
                                    </div>
                                </div>
                                <div class="row justify-content-between">
                                    <div class="col-md-5">
                                        <input type="time" class="form-control" name="start_time" placeholder="">
                                    </div>
                                    <div class="col-md-1 text-center">
                                        To
                                    </div>
                                    <div class="col-md-5">
                                        <input type="time" class="form-control" placeholder="" name="end_time">
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="spot_id" hidden value="1">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">
                                Submit Availability
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    @endsection
