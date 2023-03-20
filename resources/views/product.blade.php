@extends('master')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          @foreach ($products as $product)
          <div class="carousel-item {{$product['id']==1?'active':''}}">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
            <a href="detail/{{$product['id']}}">
              <img class="slider-img d-block w-100" src="{{$product['gallery']}}" alt="First slide">
            <div class="carousel-caption w-75">
                <h3 class="text-danger">{{$product['name']}}</h3>
                <p class="text-warning">{{$product['description']}}</p>
            </div>
            </a>
                </div>
        </div>
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      {{-- Trending Product Section --}}
      <div class="container">
        <div class="trending-wrapper">
          <h3 class="mt-5">Trending Products</h3>
          @foreach ($products as $product)
            <div class="trending-item">
              <a href="detail/{{$product['id']}}">
                <img class="trending-image" src="{{$product['gallery']}}" alt="First slide">
                  <h6 class="text-danger">{{$product['name']}}</h6>
              </a>
              </div>
            </div>
            @endforeach
        </div>
      {{-- Trending Product Section --}}

@endsection