@extends('welcome')

@section('content')
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Product name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a product name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">DetaILS</label>
      <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a product name">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="category">Category</label>

        <select class="form-control" name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>

    </div>



<!-- <div class="form-group">
        <label for="exampleInputEmail1">Category name</label>
        <input name="Category name" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div> -->
    <div class="form-group">
      <label for="exampleInputPassword1">Quantity</label>
      <input name="quantity" type="number" class="form-control" id="exampleInputPassword1" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter a price">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputEmail1">Details</label>
        <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product details">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div> -->
      <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product image">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
