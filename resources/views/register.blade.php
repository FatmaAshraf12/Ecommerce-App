@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-4 custom-login">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">Name</label>
                    <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection