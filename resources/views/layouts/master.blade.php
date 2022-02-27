<!DOCTYPE html>
<html lang="en">

<head>

 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

 <title>Job Home</title>

 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

 <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

 <!-- ***** Preloader Start ***** -->
 <div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
   <span class="dot"></span>
   <div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
   <div class="row">
    <div class="col-12">
     <nav class="main-nav">
      <!-- ***** Logo Start ***** -->
      <a href="{{ url('/') }}" class="logo">Job<em> Home</em></a>
      <!-- ***** Logo End ***** -->
      <!-- ***** Menu Start ***** -->
      <ul class="nav">
       <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
       <li><a href="{{ url('jobs') }}" class="{{ Request::is('jobs') ? 'active' : '' }}">Jobs</a></li>
       <li><a href="{{ url('about_us') }}" class="{{ Request::is('about_us') ? 'active' : '' }}">About</a></li>
        @if(!empty(Auth::user()))
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>

        @if(Auth::user()->type==1)
        <div class="dropdown-menu">
         <a class="dropdown-item" href="{{ url('my_jobs') }}">My Jobs</a>
       </div>
       @else
       <div class="dropdown-menu">
         <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
         <a class="dropdown-item" href="{{ url('applied_jobs') }}">Applied Jobs</a>
       </div>
       @endif

     </li>
       @endif
     <li><a href="{{ url('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li> 
     @guest
     <li><a href="{{ route('login') }}" class="{{ Request::is('login') ? 'active' : '' }}">{{ __('Login') }}</a></li> 
     @else

     <li><a onclick="event.preventDefault();
     document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('Logout') }}</a></li> 
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
    @endguest
  </ul>        
  <a class='menu-trigger'>
   <span>Menu</span>
 </a>
 <!-- ***** Menu End ***** -->
</nav>
</div>
</div>
</div>
@if(session('success'))
<div class="alert alert-success alert-dismissable mt-sm-2">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 {{session('success')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger alert-dismissable mt-sm-2">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 {{session('error')}}
</div>
@endif
</header>

<!-- ***** Header Area End ***** -->
@yield('content')

<!-- ***** Footer Start ***** -->
<footer>
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <p>
      Copyright © 2021 <a href="{{ url('/') }}">Job Home</a>
    </p>
  </div>
</div>
</div>
</footer>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
<script src="{{ asset('assets/js/mixitup.js') }}"></script> 
<script src="{{ asset('assets/js/accordions.js') }}"></script>

<!-- Global Init -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>