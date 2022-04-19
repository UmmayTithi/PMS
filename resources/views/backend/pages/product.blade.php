@extends('backend.layout')
@section('content')
<!-- 
<a href="" class="btn btn-primary">Create Product</a> -->




<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <h1 class="h2">Product</h1>

    <a class="btn btn-success" href="{{route('product.create')}}">Create New Product</a>

     </div>
  <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">ID.</th>
      <th scope="col">Product name</th>
      <th scope="col">Category name</th>
      <th scope="col">Generic name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Weight</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $singleBiscuit)
    <tr>
    <th scope="row">{{$singleBiscuit->id}}</th>
      <td>{{$singleBiscuit->name}}</td>
      <td>{{$singleBiscuit->category->name}}</td>
      <td>{{$singleBiscuit->generic->name}}</td>
      <td>
        @if($singleBiscuit->quantity<1)
          <span class="text-danger">Stock Out</span>
        @else
          {{$singleBiscuit->quantity}}
        @endif
      </td>
      <td>{{$singleBiscuit->price}}</td>
      <td>{{$singleBiscuit->weight}}</td>
     
      <td>
      <a class="btn btn-primary" href="{{route('product.edit',$singleBiscuit->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('product.delete',$singleBiscuit->id)}}">Delete</a>
          <a class="btn btn-success" href="{{route("admin.product.single",$singleBiscuit->id)}}">View</a>
      </td>

    </tr>
   
  </tbody>
  @endforeach
</table> 
@endsection