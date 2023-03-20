@extends('master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
              <div class="card-header">
                <h1>Login</h1>
              </div>
              <div class="card-body">
                <form action="login" method="post">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" name="email" class="form-control"placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control"placeholder="Password">
                  </div>
                    <button type="submit" class="btn btn-info btn-block">Login</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection