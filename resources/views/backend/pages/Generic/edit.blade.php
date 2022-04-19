@extends('backend.layout')
@section('content')
<form action="{{route('generic.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$generic->id}}">
  <div class="form-group mb-2">
    <label for="exampleInputEmail1">Generic name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter generic name" value="{{$generic->name}}">
  </div>
  <div class="form-group mb-2">
    <label for="exampleInputPassword1">Details</label>
    <input name="details" type="text" class="form-control" id="exampleInputPassword1" placeholder="Details" value="{{$generic->details}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
