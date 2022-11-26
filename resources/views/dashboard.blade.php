@extends('layout.app')
@section("content")
<h1 class="text-center mt-5">TajaKhabar Headline Lists</h1>
<div class="text-center">
    <form action="{{route('saveTodo')}}" method="post">
        @csrf
        <input required type="text" class="form-control w-25 mx-auto" name="todoItem" placeholder="TajaKhabar Headlines"
            aria-label="Todo-Item" aria-describedby="basic-addon1">
        <button class="btn btn-success my-2" type="submit">Add Headlines</button>
    </form>
</div>
<table class="table table-hover w-75 mx-auto my-3">
    <thead>
        <tr class="table-primary">
            <th scope="col">S.N</th>
            <th scope="col">TajaKhabar Title</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr class="table-danger">
            @foreach($items as $value)
        <tr class="table-primary">
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$value->Title}}</td>
            <!-- <td>{{$value->id}}</td> -->
            <td>
                <a class="btn btn-primary" href="/edit/{{$value->id}}">Edit</a>
                <a class="btn btn-danger" href="/delete/{{$value->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
        </tr>
    </tbody>
</table>
@endsection