@extends('master')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-6">
                <img src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-lg-6 mt-4">
                <h2 class="font-weight-bold pt-2 pb-4">{{$product['name']}}</h2>
                <h4>Price : ${{$product['price']}}</h4>
                <h6 class="py-2">Description : {{$product['description']}}</h6>
                <h5>Category : {{$product['category']}}</h5>
                <hr><br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input name="product_id" type="hidden" value="{{$product['id']}}">
                    <button type="submit" class="btn btn-info">Add to Cart</button>
                </form>
                <a href="" class="btn btn-success mt-2">Buy Now</a>
            </div>
        </div>
    </div>

@endsection