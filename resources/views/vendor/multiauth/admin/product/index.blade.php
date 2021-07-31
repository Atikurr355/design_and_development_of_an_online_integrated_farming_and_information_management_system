@extends('layout.app')

@section('content')

<div class="container mt-5">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1 class="mt-4">Product Index</h1>
        <div class="row">
          @foreach ($products as $product)
          <div class="col-md-4 my-2">
            <div class="card p-2 shadow   ">
              <div class="card-image">
                <img src="/productimage/{{$product->image}}" height="150" width="100%" alt="product_image">
              </div>
              <div class="card-header">{{$product->name}}</div>
              <div class="card-body">{{$product->description}}</div>
              <div class="card-text">
                Quantity:{{$product->quantity}}
              </div>

              <div class="card-footer">
              <!------------  <a href="#" class="btn btn-warning">
                  Buy
                </a>------------->
                <a href="#" class="btn btn-primary">
                  Price: {{$product->price}} <span class="text-light" >Tk</span>
                </a>

                <a class="btn btn-warning pull-left" href="{{url('product/'.$product->id.'/edit')}} ">Edit</a>
                <a class="btn btn-danger pull-right" href="#">Delete</a>

              </div>
            </div>
          </div>
          @endforeach
          {{$products}}

        </div>



    </div>
    <div class="panel-body"></div>
  </div>
</div>
@endsection
