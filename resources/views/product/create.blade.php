@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 ">

          <h4 class="mt-2">{{session()->get('insertmsg')}}</h4>

        <div class="card h-100">
          <div class="card-header">
            Add Product
          </div>
          <div class="card-body">
            <form enctype="multipart/form-data" action="{{'/product'}}" method="post">
              {{csrf_field()}}
            <div class="form-group">
              <label for="title">Product Title</label>
              <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Product Title">
            </div>
            <div class="form-group">
              <label for="description">Short Description</label>
              <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="form-group">
              <label for="categoryID">Category ID</label>
              <input type="number" class="form-control" id="categoryID" name="categoryID" aria-describedby="emailHelp" placeholder="Category ID">
            </div>
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" id="quantity" name="quantity" aria-describedby="emailHelp" placeholder="Quantity">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Price">
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <input type="number" class="form-control" id="status" name="status" aria-describedby="emailHelp" placeholder="Status">
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
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url('/product')}}" class="btn btn-primary">Back</a>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
