@extends('frontend.master')

@section('content')

<div class="row">
 
    <div class="col-md-4" style="margin-top: 100px;">
        <div class="product-item">
            <a href="">
                <img src="{{url('/uploads/'.$product->image)}}" alt="DFASF" style="height: 100px;">
            </a>

        </div>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-4" style="margin-top: 100px;">
        <div class="down-content">
            <a href="#"><h4>{{$product->name}}</h4></a>
            <h6>{{$product->price}} .BDT</h6>
            <p>{{$product->details}}</p>

            <span>Reviews (32)</span>

            <a href="{{route('cart.add',$product->id)}}" class="btn btn-success">Add to Cart</a>
        </div>
    </div>
    <!-- <div class="col-md-2"></div> -->
</div>

@endsection