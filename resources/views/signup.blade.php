@extends('layout.app')
@section("content")
<form action="{{route('signup')}}" method="post" class="col-6 mx-auto mt-5 p-3 shadow">
    <h1 class="text-center">Sign Up</h1>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" name="fullName" class="form-control @error('fullName') is-invalid  @enderror" id="name"
            aria-describedby="name">
        @error('fullName')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid  @enderror"
            id="exampleInputEmail1" aria-describedby="emailHelp">
        @error('email')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid  @enderror"
            id="exampleInputPassword1">
        @error('password')
        <span class="invalid-feedback">{{$message}}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
@endsection