@extends('master')

@section('content')
    

<div class="container">
        <div class="row py-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="cart-header">
                        <h1 class="pl-5 pt-3">Checkout</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            @foreach ($products as $product)
                            <tr>
                                <td><img style="height: 70px;" src="{{ $product->gallery }}" alt=""></td>
                                <td><strong>{{ $product->name }}</strong> <br> <small>{{ $product->description }}</small></td>
                                <td>${{ $product->price }}</td>
                                <td>
                                    <a href="/removecart/{{$product->cart_id}}" class="btn btn-sm btn-danger"><i class=" fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="float-right"><a href="/ordernow" class="btn btn-info btn-end">Order Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
@endsection
