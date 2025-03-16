@extends('layouts.layout')

@section('title', 'Dashboard')
@section('content')

    <div class="page-body">
        <div class="container">
            <div class="row g-4">
                <div class="card">
                    <form action="{{ route('spots.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <div class="card-header">
                            <h3 class="m-0">
                                Add New Spot
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <label for="" class="form-label">Street Address</label>
                                <div class="row">
                                    <div class="col-md-3"><input type="text" class="form-control" name="street_number"
                                            placeholder="Street Number"></div>
                                    <div class="col-md-9"><input type="text" class="form-control"
                                            placeholder="Street Name" name="street_name">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="" class="form-label">Parish</label>
                                <select name="parish_id" id="" class="form-select">
                                    <option selected disabled>Please select parish</option>
                                    @foreach ($parishes as $item)
                                        <label class="form-check">
                                            <option value="{{ $item->id }}">{{ $item->parish_name }}</option>
                                        </label>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-selectgroup-boxes row mt-3">
                                <label for="" class="form-label">
                                    Type of Parking Space
                                </label>
                                @foreach ($classes as $vclass)
                                    <div class="col-lg-4" style="height:inherit">
                                        <label class="form-selectgroup-item">
                                            <input type="radio" name="class_id" value="{{ $vclass->id }}"
                                                class="form-selectgroup-input">
                                            <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                <span class="me-3">
                                                    <span class="form-selectgroup-check"></span>
                                                </span>
                                                <span class="form-selectgroup-label-content">
                                                    <span class="form-selectgroup-title strong mb-1">Class
                                                        {{ ' ' . $vclass->id }}</span>
                                                    <span class="d-block text-secondary">
                                                        @if ($vclass->min_height != null)
                                                            {{ 'Height: must be more than ' . $vclass->min_height }}<br/>
                                                        @endif
                                                        @if ($vclass->max_height != null)
                                                            {{ 'Height: must be less than ' . $vclass->max_height }}<br/>
                                                        @endif
                                                        @if ($vclass->min_length != null)
                                                            {{ 'Length: must be more than ' . $vclass->min_length }}<br/>
                                                        @endif
                                                        @if ($vclass->max_length != null)
                                                            {{ 'Length: must be more than ' . $vclass->max_length }}
                                                        @endif
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-3">
                                <label for="" class="form-label">Parking Space Number</label>
                                <input type="text" class="form-control" name="lot_number">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">
                                Submit Spot
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    @endsection
