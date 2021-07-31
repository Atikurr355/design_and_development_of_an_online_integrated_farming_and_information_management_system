@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
      @include('partial.admin_nav')
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header bg-light">
                <div class="float-left">Dashboard</div>
                
                <div class="" style="float:right;">
                            <ul class="navbar-nav ml-auto nav-flex-icons">
                            <li class="nav-item avatar dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span class="badge badge-danger ml-2">4</span>
                                <i class="fas fa-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
                                <a class="dropdown-item waves-effect waves-light" href="#">মেসেজ <span class="badge badge-danger ml-2">4</span></a>
                                <a class="dropdown-item waves-effect waves-light" href="#">নোটিস <span class="badge badge-danger ml-2">1</span></a>
                                <a class="dropdown-item waves-effect waves-light" href="#">Something else here <span class="badge badge-danger ml-2">4</span></a>
                                </div>
                            </li>
                            </ul>                     
                    </div>
                </div>

                <div class="card-body alert-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
