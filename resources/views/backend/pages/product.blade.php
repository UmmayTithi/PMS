@extends('welcome')
@section('content')
<!-- 
<a href="" class="btn btn-primary">Create Product</a> -->




<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">product</h1>

    <a class="btn btn-success" href="{{route('product.create')}}">Create New Product</a>

     </div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Product name</th>
      <th scope="col">Details</th>
      <th scope="col">Category name</th>
      <th scope="col">quantity</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $singleBiscuit)
    <tr>
    <th scope="row">{{$singleBiscuit->id}}</th>
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->details}}</td>
      <td>{{$singleBiscuit->category->name}}</td>
      <td>{{$singleBiscuit->quantity}}</td>
      <td>{{$singleBiscuit->price}}</td>
      <td>
        <img width="150px" src="{{url('/uploads',$singleBiscuit->image)}}" alt="product image">
       </td>
      <td>{{$singleBiscuit->action}}
      <a class="btn btn-primary" href="{{route('product.edit',$singleBiscuit->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('product.delete',$singleBiscuit->id)}}">Delete</a>
          <a class="btn btn-success" href="">View</a>
      </td>

    </tr>
   
  </tbody>
  @endforeach
</table> 
@endsection