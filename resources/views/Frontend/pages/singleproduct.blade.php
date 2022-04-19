@extends('frontend.master')

@section('content')

<div class="row my-3">

    <div class="col-md-4" style="margin-top: 100px;">
        <div class="product-item">
            <a href="">
                <img src="{{url($product->image)}}" alt="Product-image" style="height: 200px;">
            </a>

        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4" style="margin-top:100px;font-size:15px;">
        <div class="down-content">
            <h4>{{$product->name}}</h4>
            <h6><strong class="mr-2">Price:</strong>{{$product->price}} BDT</h6>
            <p>{{$product->details}}</p>
            @if($product->quantity<1)
                <span class="text-danger">Stock Out</span>
            @else
                <a href="{{route('cart.add',$product->id)}}" class="btn btn-success">Add to Cart</a>
            @endif
        </div>
    </div>
</div>

@endsection