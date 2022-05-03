@extends('master')
@section('content')

<div class="container cart">

    <h3 class="custom-title"> Cart</h3>
      <div class="cart-wrapper">
        @foreach ($products as $product)
        <div class="row">
            <div class="col-sm-2">          
                <a href="/detail/{{$product->id}}">
                    <img src="{{$product->gallery}}" alt="Los Angeles" class="" />
                </a>
            </div>
            <div class="col-sm-3">
                <div class="caption">
                  <h5><a href="/detail/{{$product->id}}">{{$product->name}}</a></h5>
                  <h5>Price : {{$product->price}}</h5>
                </div>
            </div>
            <div class="col-sm-4">
                <a href="/remove/{{$product->cart_id}}" class="btn btn-warning">Remove</a>
            </div>

        </div>
              
        @endforeach          
      </div>
    
</div>


@endsection