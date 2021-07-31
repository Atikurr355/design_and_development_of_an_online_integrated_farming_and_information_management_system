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
							<div class="col-md-8 text-light">
								<h1 class="h3">খামার বলতে এমন একটি স্থাপনাকে বুঝানো হয় যেখানে কৃত্রিম
									ভাবে যেকোন উদ্ভিদ বা প্রাণীর প্রতিপালন ও রক্ষণাবেক্ষণের মাধ্যমে বাণিজ্যিক উদ্দেশ্য সাধন করা হয়। </h1>



									    @foreach ($posts as $post)

									    <div id="mq" class=" d-flex flex-row p-4">
									      <div>
									        <i class="fa p-2 mx-4 text-primary fa-check"></i>
									      </div>
									      <div class="align-self-end">

									        <p>
									          {{$post->shortpost}}
									        </p>
									      </div>
									    </div>
									  @endforeach

										<div class=" col-lg-12">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
                             {{$post->shortpost}}
											 </div>
												<div class="carousel-item">
													{{$post->shortpost}}
												</div>
												<div class="carousel-item">
													{{$post->shortpost}}
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



							</div>

				<div class="col-md-4 p-2" style="height:500px;">
							<iframe style="height:100%; width:100%;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58494.60021906931!2d90.65191048829342!3d23.607470336745976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1571471631426!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
        </div>
							</div>
						</div>
					</div>

			</section>

				</div>

			<!-----welcome End------------------------------------->

			<section id="services" class="alert-info mt-2 ">
				<div class="headeing w-100 alert-danger t py-5 text-center">
					<h1 class="disp lay-4">ভিবিন্ন পোস্ট</h1>
				</div>
				<div class="container">
					<div class="row">
						@foreach ($spost as $post)
						<div class="col-md-12 my-2">
							<div class="card p-2 shadow h-100">
								<div class="card-image">
									<img src="{{$post->image}}" height="250" width="100%" alt="hatchary image">
								</div>
								<div class="card-header">{{$post->title}}</div>
								<div class="card-body ">{{$post->shortdescription}}...
								<div class="card-text description">
									<h3 class="alert-warning py-2 my-2 pl-2 rounded">বিস্তারিত:</h3>{{$post->Descriotion}}
								</div>
								</div>
								<div class="card-footer">
									<button class="btn btn-primary button ">বিস্তারিত...</button>
								</div>
							</div>
						</div>
						@endforeach

						{{$spost}}




			</div>
		</div>

	</section>
<!---------------Posts End---------------->

<section id="newsfeed" class="">
	<div class="headeing w-100 alert-danger py-5 text-center">
		<h1 class="display-4">নিউস ফীড </h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>
	</div>

	<div class="dark-overly">
	<div class="newsfeed-inner">
		<div class="container ">
			<div class="row">
					<div class="col-lg-4 my-2">
							<div class="card">
								<div class="card-title text-center">
									<h3>নোটিস </h3>
								</div>
								<div class="card-body">

								</div>

							</div>
					</div>
					<div class="col-lg-4 my-2">
						<div class="card">
							<div class="card-title text-center">
								<h3>সাম্প্রতিক খবর</h3>
							</div>
							<div class="card-body">

							</div>

						</div>
					</div>
					<div class="col-lg-4 my-2">
						<div class="card">
							<div class="card-title text-center">
								<h3>খামার শিল্পের বর্তমান ও ভবিষ্যৎ</h3>
							</div>
							<div class="card-body">

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!-------------------news notice end---------------------->

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


@endsection
