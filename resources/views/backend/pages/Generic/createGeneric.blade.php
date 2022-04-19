@extends('backend.layout')
@section('content')
<form action="{{route('generic.post')}}" method="POST">
    @csrf
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Generic name</label>
    <input name="generic_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter generic name">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Details</label>
    <input name="generic_details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Details">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
