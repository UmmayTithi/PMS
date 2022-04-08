@extends('welcome')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">order List</h1>

    <a class="btn btn-success" href="{{route('order.form')}}">Create New Order</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>


      <th scope="col">details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <th scope="row">{{$order->id}}</th>
     
      <th scope="row">{{$order->details}}</th>
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

