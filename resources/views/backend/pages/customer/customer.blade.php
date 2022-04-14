@extends('welcome')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">customer List</h1>



            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col"> name</th>
      <th scope="col"> email</th>
      <th scope="col"> role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $key=>$customer)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <!-- <th scope="row">{{$customer->id}}</th> -->
      <th scope="row">{{$customer->name}}</th>
      
      <th scope="row">{{$customer->email}}</th>
      <th scope="row">{{$customer->role}}</th>
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

