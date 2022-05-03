@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h5>Billing details</h5>
            <form action="/orderplace" method="POST" >
                @csrf
                  <div class="form-group">
                    <textarea name="address" placeholder="enter your address" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Payment Method</label> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                    <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
  
                  </div>
                  <button type="submit" class="btn btn-default">Order Now</button>
                </form>      
        </div>
        <div class="col-md-6">
            <h5>Your order
            </h5>
            <table class="table table-striped">
                <tbody>
                  <tr>
                    <td>Total</td>
                    <td>{{$total}}</td>
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total + 15}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    
</div>

 
@endsection