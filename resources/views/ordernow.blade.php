@extends('master')

@section('content')
    

<div class="container">
        <div class="row py-3">
            <div class="col-lg-8">
                <h1 class="py-2">Check Out</h1>
                <form action="/orderplace" method="post">
                  @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="First Name">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" name="address" placeholder="1234 Main St">
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>City</label>
                        <input type="text" class="form-control" name="city">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Zip</label>
                        <input type="text" class="form-control" name="zip">
                      </div>
                    </div>
                    <div class="form-group">
                        <label>Payment Method</label><br>
                        <input type="radio" value="Master Card" name="payment_method"> Master Card <br>
                        <input type="radio" value="American Express" name="payment_method"> American Express <br>
                        <input type="radio" value="Cash On Delivery" name="payment_method"> Cash On Delivery <br>
                    </div>
                    <button type="submit" class="btn btn-info">Place Order</button>
                  </form>
            </div>
{{-- ------------------------------------------------------------- --}}
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Your Order</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <p class="">Amount</p>
                                <p class="">Delivery Charge</p>
                                <p class="">VAT</p>
                            </div>
                            <div class="col-6">
                                <p class="">${{$total}}</p>
                                <p class="">${{10}}</p>
                                <p class="">$</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <h4>Total</h4>
                            </div>
                            <div class="col-6">
                                <h4>${{$total+10}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
@endsection
