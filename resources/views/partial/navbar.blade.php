<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        	<div class="container">
		  <a class="navbar-brand" href="#">FarmingBD</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link active" href="{{route('index')}}">হোম</a>
			  </li>
        <div class="dropdown show">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              গবাদী প্রাণী
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="{{route('goru')}}">গরু পালন </a>
              <a class="dropdown-item" href="{{route('goat')}}">ছাগল পালন </a>
              <a class="dropdown-item" href="#">খাদ্য</a>
            </div>
          </div>
          <div class="dropdown show">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                পোলট্রি পালন
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">হাঁস পালন</a>
                <a class="dropdown-item" href="#">মুরগি পালন</a>
                <a class="dropdown-item" href="#">কবুতর পালন</a>
                <a class="dropdown-item" href="#">কোয়েল পালন</a>
                <a class="dropdown-item" href="#"> খাদ্য</a>
              </div>
            </div>
            <div class="dropdown show">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  হ্যাচারী
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#"></a>
                  <a class="dropdown-item" href="{{route('hachariplan')}}">হ্যাচারি ব্যবস্থাপনা</a>
                  <a class="dropdown-item" href="{{route('incubator1')}}">ইনকিউবেটরের ধরন ও দাম(হ্যাচারী) </a>
                  <a class="dropdown-item" href="{{route('incubator2')}}">ইনকিউবেটর বানানোর নিয়ম(হ্যাচারী) </a>
                  <a class="dropdown-item" href="{{route('incubator3')}}"> ইনকিউবেটর কিভাবে চালাতে হয়</a>
                  <a class="dropdown-item" href="#"> টিপস(হ্যাচারী) </a>
                </div>
              </div>
		      <li class="nav-item ">
		        <a class="nav-link"  href="#newsfeed"  role="button">
		          প্রানী স্বাস্থ্য
		        </a>
		      </li>
          <li class="nav-item ">
		        <a class="nav-link"  href="{{url('grash')}}"  role="button">
		          ঘাস চাষ
		        </a>
		      </li>
          <li class="nav-item ">
		        <a class="nav-link"  href="{{url('buy')}}"  role="button">
		          পণ্য ক্রয়
		        </a>
		      </li>
          <li class="nav-item">
  		        <a class="nav-link" href="{{url('login')}}">লগ ইন </a>
  		      </li>

		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</div>
    </nav>
