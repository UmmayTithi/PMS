@extends('welcome')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">stock List</h1>

    <a class="btn btn-success" href="{{route('stock.form')}}">Create New Stock</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product name</th>


      <th scope="col">  quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($stocks as $key=>$stock)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <th scope="row">{{$product->name}}</th>
     
      <th scope="row">{{$product->quantity}}</th>
      <th scope="row">
      <a class="btn btn-primary" href="">Edit</a>
          <a class="btn btn-danger" href="">Delete</a>
          <a href="" class="btn btn-success">View</a>
      </th>

    </tr>
  @endforeach

  </tbody>
</table>
@endsection

