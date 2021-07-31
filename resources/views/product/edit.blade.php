@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-light">
        <div class="alert alert-primary text-center">
          <h3>Edit Product</h3>
        </div>

          <h4>{{session()->get('insertmssg')}}</h4>

        <form enctype="multipart/form-data" action="{{'/product'}}" method="post">
          {{csrf_field()}}
        <div class="form-group">
          <label for="title">Product Name</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{$product->title}}" placeholder="Product Name">
        </div>
        <div class="form-group">
          <label for="description">Short Description</label>
          <textarea class="form-control" id="description" name="description"  placeholder="Description">{{$product->description}} </textarea>
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp" value="{{$product->quantity}}" placeholder="Quantity">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" value="{{$product->price}}" placeholder="Price">
        </div>
        <div class="form-group">
              <label for="image">Upload Image</label><br>
              <div class="row">
                <div class="col-lg-4">
                  <input type="file" class="" id="image" name="product_image[]" >
                </div>
                <div class="col-lg-4">
                  <input type="file" class="" id="image" name="product_image[]" >
                </div>
                <div class="col-lg-4">
                  <input type="file" class="" id="image" name="product_image[]" >
                </div>
                <div class="col-lg-4">
                  <input type="file" class="" id="image" name="product_image[]" >
                </div>
              </div>
            </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{url('/product')}}" class="btn btn-primary">Back</a>
        </form>
      </div>
    </div>
  </div>
@endsection
