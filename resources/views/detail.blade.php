@extends('master')
@section('content')

<div class="container detail-page">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6 caption">
            <h4>{{$product['name']}}</h4>
            <p>Details : {{$product['description']}}</p>

            <p>Price : {{$product['price']}} EGP</p>
            <p>Category : {{$product['category']}}</p>
            <button  class="btn btn-primary">Add to cart</button>
        </div>
    </div>

</div>


@endsection