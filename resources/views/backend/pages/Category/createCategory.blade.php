@extends('welcome')
@section('content')
<form action="{{route('category.post')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category name</label>
    <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Details</label>
    <input name="category_details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Details">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
