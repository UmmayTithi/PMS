@extends('welcome')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Category List</h1>

    <a class="btn btn-success" href="{{route('category.form')}}">Create New Category</a>

            </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Category name</th>
      <th scope="col">details</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $key=>$category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <th scope="row">{{$category->name}}</th>
      <th scope="row">{{$category->details}}</th>
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

