@extends('master')

@section('content')
    

<div class="container">
        <div class="row py-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="cart-header">
                        <h1 class="pl-5 pt-3">Orders</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Image</th>
                                <th>Product Details</th>
                                <th>Price</th>
                                <th>Delivery Status</th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                            </tr>
                            @foreach ($orders as $product)
                            <tr>
                                <td><img style="height: 70px;" src="{{ $product->gallery }}" alt=""></td>
                                <td><strong>{{ $product->name }}</strong> <br> <small>{{ $product->description }}</small></td>
                                <td>${{ $product->price }}</td>
                                <td>{{ $product->status }}</td>
                                <td>{{ $product->payment_method }}</td>
                                <td>{{ $product->payment_status }}</td>
                            </tr>
                            @endforeach
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
@endsection
