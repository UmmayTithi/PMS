@extends('Frontend.master')

@section('content')
 @foreach($items->chunk(4) as $chunk)
 <div class="row my-2">
   @foreach($chunk as $product)
   <div class="col-md-3">
     <div class="card" style="">
      <a href="{{route('product.view',$product->id)}}">
        <img class="card-img-top" src="{{asset($product->image)}}" alt="Card image cap" style="height:240px;">
      </a>
      <div class="card-body text-center">
        <h5 class="card-title"><strong class="mr-2">Price</strong>{{$product->price}} TK.</h5>
        <p class="card-text">{{$product->name}}</p>
        <a href="{{route('product.view',$product->id)}}" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
   </div>
  @endforeach
 </div>
 @endforeach
 @if($items->count()<1)
 <h1 class="text-center text-muted m-5">No product found</h1> 
 @endif
@endsection