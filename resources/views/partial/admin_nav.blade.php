

<div class="col-lg-3 alert-dark rounded">
<div class="profile text-center p-2">
  <img src="{{asset('img/' .'atik.jpg')}}" class="rounded-circle" alt="Cinque Terre" height="200"> 
</div>
<hr>
  <nav>
      <ul class="nav">
        <li class="nav-link">
           <a class="link text-dark" href="#"><i class="fa fa-list"></i> পণ্য মেনেজ</a>
            <ul class="">
              <li class="nav-link links">
              <a class="nav-item text-dark" href="{{url('product/create')}}"> <i class="fas fa-plus-square"></i> Add পণ্য</a>
              </li>
              <li class="nav-link links">
                <a class="nav-item text-dark" href="{{url('product')}}">পণ্য</a>
              </li>
              <li class="nav-link links">
                <a class="nav-item text-dark" href="{{url('buy')}}">পণ্য ক্রয়</a> 
              </li>
            </ul>
        </li>
      </ul>
      <ul class="nav">
        <li class="nav-link">
          <a class="link2 text-dark" href="#">টাকা প্রদানের তথ্য</a>
            <ul class="">
              <li class="nav-link links2">
                <a class="nav-item text-dark" href="{{asset('paymentinfo')}}">বিকাশ</a>
              </li>
            </ul>
        </li>
      </ul>
      <ul class="nav">
        <li class="nav-link">
          <a class="link3 text-dark" href="{{asset('question')}}">প্রশ্ন জিজ্ঞাসা </a>
        </li>
      </ul>
  </nav>
</div>
