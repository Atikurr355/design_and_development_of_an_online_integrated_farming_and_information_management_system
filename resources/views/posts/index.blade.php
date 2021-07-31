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
							<img class="d-block  w-100" src="{{asset('img/slider/'.'1.jpg')}}" height="250px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/slider/'.'2.jpg')}}" height="250px"   alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block  w-100" src="{{asset('img/slider/'.'3.jpg')}}" height="250px" alt="Third slide">
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

				    <div class="add col-lg-3 alert-success">
					<iframe class="w-100 h-100" src="https://www.youtube.com/embed/bEa9TfrzrLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				    </div>
					</div>
       			</div>
			</section>
<!-------------------------home end-------->

			<section id="welcome" class="">
				<div class="dark-overly">
				<div class="welcome-inner">
					<div class="container ">
						<div class="row">
							<div class="text-light">
								<h1 class="h3">খামার বলতে এমন একটি স্থাপনাকে বুঝানো হয় যেখানে কৃত্রিম
									ভাবে যেকোন উদ্ভিদ বা প্রাণীর প্রতিপালন ও রক্ষণাবেক্ষণের মাধ্যমে বাণিজ্যিক উদ্দেশ্য সাধন করা হয়। </h1>
							</div>
							@foreach($spost as $post)
							<div class="col-lg-4 my-2">
								<div class="card h-100 p-2">
										<img class="card-img-top" src="{{$post->image}}" alt="Card image cap">
										<div class="card-body">
											<h5 class="card-title">{{$post->title}}</h5>
											<p class="card-text">{{$post->shortdescription}}</p>
											<a href="#" class="btn btn-primary">Full Description</a>
										</div>
										<div class="card-text px-4">
											<a href="#" class="btn btn-warning">Edit</a>
											<a href="#" class="btn btn-danger">Delete</a>
										</div>
									</div>
							</div>
							@endforeach
							{{$spost}}
             </div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</section>

			<!-----welcome End------------------------------------->

			<!---------------Service End---------------->



			<section id="footer">
				<div class="section-footer bg-dark text-light">
					<div class="footer-inner">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class=" text-center py-2">
										Copyright &copy; 2019 <br>
										Designed by Md Atikur Rahman
										<div class="">

												<a class="btn btn-primary" href="#">Contact Us</a>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	</div>


@endsection
