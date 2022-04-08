@extends('welcome')
@section('content')
<form action="{{route('customer.post')}}" method="POST">
    @csrf

    <div class="form-group">
    <label for="exampleInputEmail1"> name</label>
    <input name="customer_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer name">
  </div>
  <!-- <div class="form-group"> -->
    <!-- <label for="exampleInputEmail1">id</label>
    <input name="customer_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter customer id">
  </div> --> -->
  <div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input name="customer_address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contact</label>
    <input name="customer_contact" type="text" class="form-control" id="exampleInputPassword1" placeholder="Contact">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">email</label>
    <input name="customer_email" type="text" class="form-control" id="exampleInputPassword1" placeholder="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection