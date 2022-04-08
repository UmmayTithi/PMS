@extends('welcome')

@section('content')
<form action="{{route('product.update')}}" method="post"> 
  < @method('put') 
    @csrf
    <input type="hidden" value="{{$product->id}}" name="product_id">
    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input required value="{{$product->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="category">Category</label>

        <select class="form-control" name="category_id" id="">
            @foreach($categories as $cate)
            <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
        </select>

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Quantity</label>
      <input value="{{$product->quantity}}" name="quantity" type="number" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <!-- <div class="form-group">
      <label for="exampleInputPassword1">Weight</label>
      <input value="{{$product->weight}}" name="weight" type="number" class="form-control" id="exampleInputPassword1" >
    </div> -->
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input value="{{$product->price}}" name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Details</label>
        <input value="{{$product->details}}" name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product image">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <button type="submit" class="btn btn-primary">update</button>
</form>
@endsection