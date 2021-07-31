@extends('layouts.app')

@section('content')

<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1 class="">Product Index</h1>
        <div class="row">
          <div class="col-md my-2">
            <div class="card alert-dark p-2 shadow">
              <div class="card-body">
                <table class="table table-hover table-striped text-center">
                  <tr>
                    <th>SL</th>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Posted by</th>
                    <th>Action</th>
                  </tr>
                  
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->id}}</td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->description}}</td>
                      <td>{{$product->price}} </td>
                      <td>{{$product->quantity}} </td>  
                      <td> </td>                    
                      <td>
                         <a class="btn btn-warning " href="{{url('product/'.$product->id.'/edit')}} ">Edit</a>
                         <a class="btn btn-danger " href="#deleteModal{{$product->id}}" data-toggle="modal">Delete</a>

                            <!--delet Modal -->
                              <div class="modal fade" id="deleteModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="deleteModal">Are you sure to delete ?</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form action="{{url('product/'.$product->id)}}" method="DELETE">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                      </form>
                                    
                                    </div>
                                    <div class="modal-footer">
                                      
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                      </td>
                    </tr>
                  @endforeach

                </table>
                </div>
              </div>

            </div>
          </div>
          {{$products}}

        </div>



    </div>
    <div class="panel-body"></div>
  </div>
</div>
@endsection
