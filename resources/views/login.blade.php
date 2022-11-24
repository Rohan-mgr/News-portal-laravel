@extends('layout.app')
@section("content")
@if(Session::has("fail"))
<div class="alert alert-warning alert-dismissible fade show col-6 mx-auto" role="alert">
    {{Session::get('fail')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<form action="{{route('login')}}" class="col-6 mx-auto mt-5 shadow p-3" method="post">
    @csrf
    <h1 class="text-center">Login</h1>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection