@extends('backend.layout')
@section('content')
<form action="{{route('order.post')}}" method="POST">
    @csrf

    
  <div class="form-group">
    <label for="exampleInputEmail1">id</label>
    <input name="product_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Details</label>
    <input name="product_quantity" type="text" class="form-control" id="exampleInputPassword1" placeholder="quantity">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection