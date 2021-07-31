@extends('layout.app')
@section('content')
<div class="container-fluid">
			<section id="home" class="alert-info">
				<div class="container-fluid">
					<div class="row">
					<div class="logo col-lg-3 alert-success">
					   <img src="{{asset('img/logo/'.'logo.png')}}" height="250px" alt="LOGO">
				    </div>
					<div class=" col-lg-6">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img class="d-block  w-100" src="{{asset('img/hachary/'.'s1.jpg')}}" height="250px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/hachary/'.'s2.jpg')}}" height="250px"   alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/hachary/'.'s3.png')}}" height="250px" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
						</div>
				</div>
        <div class="add h-100 col-lg-3">
          <iframe width="300" height="250" src="https://www.youtube.com/embed/5am2E6FbqjI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

      </div>

      <div class="heading bg-info text-center py-5">
        <h1>হ্যাচারি ব্যবস্থাপনা</h1>
      </div>
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-9">
              <h3 class="mt-2">হ্যাচারীতে কি কি রোগের কারণে বাচ্চার মান খারাপ হয় এবং হ্যাচাবিলিটি হ্রাস পাবার কারণ  </h3>
							@foreach ($hachari as $hach)
		          <div class="col-md-12 my-2">
		            <div class="card p-2 shadow h-100">
		              <div class="card-image">
		                <img src="{{asset('img/hachary/'.'s1.jpg')}}" height="250" width="100%" alt="hatchary image">
		              </div>
		              <div class="card-header"><h3>মৎস্য হ্যাচারি ও নার্সারিতে রোগ সংক্রমণে করণীয়</h3><br>{{$hach->heading}}</div>
		              <div class="card-body description"><h3 class="alert-warning py-2 my-2 pl-2 rounded">বিভিন্ন রোগ:</h3>{{$hach->model}}
		              <div class="card-text">
		                <h3 class="alert-warning py-2 my-2 pl-2 rounded">বিস্তারিত:</h3>{{$hach->veriouspart}}
		              </div>
		              <div class="card-text">
		                Price:{{$hach->produce}}
		              </div>
									<div class="card-text">
		                <h3 class="alert-warning py-2 my-2 pl-2 rounded">সুত্র:</h3>{{$hach->sousce}}
										<h4 class="alert-warning py-2 my-2 pl-2 rounded">তারিখ:{{$hach->created_at}}</h4>
		              </div>
									</div>
		              <div class="card-footer">
		                <button class="btn btn-primary button ">বিস্তারিত...</button>
		              </div>
		            </div>
		          </div>
		          @endforeach


            </div>

          </div>
        </div>
				</section>
			</div>
        @endsection
