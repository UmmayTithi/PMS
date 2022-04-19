@extends('backend.layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Product Details</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset($product->image)}}" alt="product-image" style="height:250px;">
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-2">
                            <div class="col-4"><strong>Name:</strong></div>
                            <div class="col-4">{{$product->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"><strong>Details:</strong></div>
                            <div class="col-4">{{$product->details}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"><strong>Category:</strong></div>
                            <div class="col-4">{{$product->category->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"><strong>Generic:</strong></div>
                            <div class="col-4">{{$product->generic->name}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"><strong>Price:</strong></div>
                            <div class="col-4">{{$product->price}}TK.</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"><strong>Weight:</strong></div>
                            <div class="col-4">{{$product->weight}}gram</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"><strong>Quantity:</strong></div>
                            <div class="col-4">
                                @if($product->quantity<1)
                                <span class="text-danger">Stock Out</span>
                                @else
                                {{$product->quantity}}
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a class="btn btn-primary" href="{{route('product.edit',$product->id)}}">Edit</a>
                                <a class="btn btn-danger" href="{{route('product.delete',$product->id)}}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
