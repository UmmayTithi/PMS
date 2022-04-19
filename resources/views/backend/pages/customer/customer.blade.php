@extends('backend.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Customers</h1>
</div>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">ID.</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $key=>$customer)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <th scope="row">{{$customer->id}}</th>
      <th scope="row">{{$customer->name}}</th>
      <th scope="row">{{$customer->email}}</th>
      <th scope="row">
          <a class="btn btn-danger" href="{{route("customer.delete",$customer->id)}}">Delete</a>
          <a href="" class="btn btn-success">View</a>
      </th>

    </tr>
  @endforeach

  </tbody>
</table>
@endsection

