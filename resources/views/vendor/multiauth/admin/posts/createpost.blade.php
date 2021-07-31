@extends('multiauth::layouts.app')
@section('content')
  <div class="container">
    <div class="alert alert-success text-center">
      <h1>Create Post</h1>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-8 text-light">
        <div class="alert alert-success">
          {{session()->get('msg')}}
        </div>


        <form enctype="multipart/form-data" action="{{'/post'}}" method="post">
          {{csrf_field()}}
        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Post Title">
        </div>
        <div class="form-group">
          <label for="shortdescription">Short Description</label>
          <textarea class="form-control" id="shortdescription" name="shortdescription" placeholder=" Short Description"></textarea>
        </div>
        <div class="form-group">
          <label for="Descriotion">Full Description</label>
          <textarea class="form-control" id="Descriotion" name="Descriotion" placeholder="Descriotion"></textarea>
        </div>
        <div class="form-group">
          <label for="image">Image</label><br>
          <input type="file" class="" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{url('/home')}}" class="btn btn-primary">Back</a>
        </form>
      </div>
    </div>
  </div>
@endsection
