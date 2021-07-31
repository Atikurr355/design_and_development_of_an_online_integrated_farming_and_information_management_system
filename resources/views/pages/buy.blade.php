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
                <!-- <img src="/productimage/{{$product->image}}" height="150" width="100%" alt="product_image"> -->

                @php $i=1;  @endphp
                @foreach($product->images as $image)
                @if($i>0)
                <img src="{{asset('img/productimage/'.$image->image)}}" height="150" width="100%" alt="product_image">
                 @endif
                 @php $i--;  @endphp
                @endforeach

              </div>
              <div class="card-header">{{$product->title}}</div>
              <div class="card-body">
                <div class="card-text" style="overflow:auto;height:60px;">
                  {{$product->description}}
                </div>

                <div class="card-text">
                  Quantity:{{$product->quantity}} <br>
                  Price: <span class="text-dark">Tk.</span>{{$product->price}} <span class="text-dark">Per Kg. </span>
                </div>
                <div class="card-footer">
                  <a href="#" class="btn btn-warning btn-block">
                    <i class="fas fa-shopping-cart"></i> Buy
                  </a>
                  <!------------
                  <a class="btn btn-warning pull-left" href="{{url('product/'.$product->id.'/edit')}} ">Edit</a>
                  <a class="btn btn-danger pull-right" href="#">Delete</a>
                  ------------->
                </div>
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
