@extends('frontend.master')

@section('content')


@foreach($items as $singleBiscuit)
<div class="col-md-4" style="margin-top: 20px;">
            <div class="product-item">
              <img width="150px" src="{{url('/uploads/',$singleBiscuit->image)}}" alt="product image" style="object-fit: contain;">
              <div class="down-content">
                <a href="#"><h4>{{$singleBiscuit->name}}</h4></a>
                <h6>{{$singleBiscuit->details}}</h6>
                <p>{{$singleBiscuit->category}}</p>
                <p>{{$singleBiscuit->quantity}}</p>
                <p>{{$singleBiscuit->price}}</p>

                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
</div>
@endforeach



@endsection