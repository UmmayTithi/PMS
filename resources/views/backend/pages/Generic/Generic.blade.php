@extends('backend.layout')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Generic List</h1>

    <a class="btn btn-success" href="{{route('generic.form')}}">Create New Generic</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Generic name</th>
      <th scope="col">details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($generics as $key=>$generic)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <th scope="row">{{$generic->name}}</th>
      <th scope="row">{{$generic->details}}</th>
      <th scope="row">

      <a class="btn btn-primary" href="{{route('generic.edit',$generic->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('generic.delete',$generic->id)}}">Delete</a>
         
      </th>

    </tr>
  @endforeach

  </tbody>
</table>
@endsection

