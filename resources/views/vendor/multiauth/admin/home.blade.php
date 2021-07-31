@extends('multiauth::layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('partial.supadmin_nav')
        <div class="col-md-9">
            <div class="card clearfix">
                <div class="card-header">
                <div  class="float-left">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                
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
                @include('multiauth::message')
                     You are logged in to {{ config('multiauth.prefix') }} side!

                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
