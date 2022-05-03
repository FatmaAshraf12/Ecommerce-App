@extends('master')
@section("content")
<div class="container custom-products">
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
    
      <div class="carousel-inner">
        @foreach ($products as $product)
          <div class="carousel-item {{$product['id']==1?'active':''}}">
            <img src="{{$product['gallery']}}" alt="Los Angeles" class="slider-img" />
            <div class="carousel-caption">
                <h3>{{$product['name']}}</h3>
                <p>{{$product['description']}}</p>
              </div>
          </div>     
        @endforeach          
      </div>
    
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
  </div>
</div>


<div class="container custom-products2">

    <h3 class="custom-title">  Our Products</h3>
      <div class="trend-wrapper">
        @foreach ($products as $product)
          <div class="trend-item">
            <img src="{{$product['gallery']}}" alt="Los Angeles" class="" />
            <div class="caption">
                <h5>{{$product['name']}}</h5>
              </div>
          </div>     
        @endforeach          
      </div>
    
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
