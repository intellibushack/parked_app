@extends('layouts.layout')

@section('title','Stripe Payment')

@section('content')
<div class="page-body">
    <div class="container-lx">
        <div class="row row-cards">
            <div class="mb-3">
                <label class="form-label">Payment method</label>
                <div class="form-selectgroup form-selectgroup-boxes d-flex flex-column">
                  <label class="form-selectgroup-item flex-fill">
                    <input type="radio" name="form-payment" value="visa" class="form-selectgroup-input">
                    <div class="form-selectgroup-label d-flex align-items-center p-3">
                      <div class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </div>
                      <div>
                        <span class="payment payment-provider-visa payment-xs me-2"></span>
                        ending in <strong>7998</strong>
                      </div>
                    </div>
                  </label>
                  <label class="form-selectgroup-item flex-fill">
                    <input type="radio" name="form-payment" value="mastercard" class="form-selectgroup-input" checked="">
                    <div class="form-selectgroup-label d-flex align-items-center p-3">
                      <div class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </div>
                      <div>
                        <span class="payment payment-provider-mastercard payment-xs me-2"></span>
                        ending in <strong>1000</strong>
                      </div>
                    </div>
                  </label>
                  <label class="form-selectgroup-item flex-fill">
                    <input type="radio" name="form-payment" value="paypal" class="form-selectgroup-input">
                    <div class="form-selectgroup-label d-flex align-items-center p-3">
                      <div class="me-3">
                        <span class="form-selectgroup-check"></span>
                      </div>
                      <div>
                        <span class="payment payment-provider-paypal payment-xs me-2"></span>
                      </div>
                    </div>
                  </label>
                </div>
              </div>
        </div>
    </div>
</div>

@endsection