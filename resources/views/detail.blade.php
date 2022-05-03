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
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button  class="btn btn-primary">Add to cart</button>

            </form>
        </div>
    </div>

</div>


@endsection