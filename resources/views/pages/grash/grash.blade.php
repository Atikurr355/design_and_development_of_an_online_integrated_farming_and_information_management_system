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
							<img class="d-block  w-100" src="{{asset('img/ghas/'.'ghas1.jpg')}}" height="250px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/ghas/'.'ghas2.jpeg')}}" height="250px"   alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/ghas/'.'ghas3.jpg')}}" height="250px" alt="Third slide">
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
        <iframe  height="250px" src="https://www.youtube.com/embed/XQ3yXwCsXik" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

      </div>

      <div class="heading bg-info text-center py-5">
        <h1>ঘাস চাষ পদ্ধতি</h1>
      </div>
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-9">
              <h3 class="mt-2">Apr 13, 2019 - গবাদিপশুর খাদ্য হিসেবে উন্নত জাতের ঘাস চাষে ঝুঁকছেন গাজীপুরের শ্রীপুর উপজেলার খামারি ও কৃষকেরা।
                   প্রাণিসম্পদ কর্মকর্তার দপ্তরের তথ্য অনুযায়ী, বর্তমানে এই উপজেলায় প্রায় ৪০০ বিঘা জমিতে নেপিয়ার পাক চং-১ জাতের ঘাস চাষ হচ্ছে। আর এর সঙ্গে সম্পৃক্ত আছেন ২৫০ জন কৃষক। </h3>
							


            </div>

          </div>
        </div>
                </section>
                @include('partial.footer')
			</div>
        @endsection
