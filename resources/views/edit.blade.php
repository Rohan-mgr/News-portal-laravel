@extends('layout.app')
@section("content")
<h1 class="mt-5 text-center">Edit TajaKhabar Headline</h1>

<form action="/edit" method="post" class="text-center">
    @csrf
    <input type="hidden" value="{{$item->id}}" name="todoId" />
    <input required type="text" value="{{$item->Title}}" class="form-control w-25 mx-auto" name="todoItem"
        placeholder="Shopping Item" aria-label="Todo-Item" aria-describedby="basic-addon1">
    <button class="btn btn-success my-2" type="submit">Update</button>
</form>
@endsection