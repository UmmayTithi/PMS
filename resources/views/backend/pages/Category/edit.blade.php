@extends('backend.layout')
@section('content')
<form action="{{route('category.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$category->id}}">
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Category name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name" value="{{$category->name}}">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Details</label>
    <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Details" value="{{$category->details}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
