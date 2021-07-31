@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-light">
        <div class="alert alert-primary text-center">
          <h3>Product Entry</h3>
        </div>

          <h4>{{session()->get('insertmssg')}}</h4>

        <form enctype="multipart/form-data" action="{{'/product'}}" method="post">
          {{csrf_field()}}
        <div class="form-group">
          <label for="name">Product Name</label>
          <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Product Name">
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
          <label for="publication">Publication</label>
          <input type="number" class="form-control" id="publication" name="publication" aria-describedby="emailHelp" placeholder="Publication">
        </div>
        <div class="form-group">
          <label for="image">Upload Image</label><br>
          <input type="file" class="" id="image" name="image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/product')}}" class="btn btn-primary">Back</a>
        </form>
      </div>
    </div>
  </div>
@endsection
