@extends('layouts.master')

@section('content')

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner" id="top">
  <video autoplay muted loop id="bg-video">
    <source src="assets/images/video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="caption">
      <h6>We Value your skills & experience </h6>
      <h2>Find the perfect <em>Job</em></h2>
      <div class="main-button">
        <a href="{{ url('jobs') }}">Find Jobs</a>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Cars Starts ***** -->
<section class="section" id="trainers">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2><em>Job</em> Categories</h2>
          <img src="assets/images/line-dec.png" alt="">
          <p>Browse our best featured jobs that can help you grow your carrier.</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($categories as $key => $category)
      <div class="col-lg-4">
        <a href="{{ url('category', $category->id) }}">
        <div class="trainer-item" style="background: #ed563b;">
          <div class="down-content">
            <h4 style="color: white;text-align:center;margin-top: 5%;">{{$category->name}}</h4>
          </div>
        </div>
       </a>
      </div>
      @endforeach
    </div>

    <br>
  </div>
</section>
<!-- ***** Cars Ends ***** -->

<!-- ***** Cars Starts ***** -->
<section class="section" id="trainers">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>Featured <em>Jobs</em></h2>
          <img src="assets/images/line-dec.png" alt="">
          <p>Browse our best featured jobs that can help you grow your carrier.</p>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($jobs as $key => $job)
      <div class="col-lg-4">
        <div class="trainer-item">
          <div class="image-thumb">
            <img style="height: 180px;" src="images/{{$job->image}}" alt="">
          </div>
          <div class="down-content">
            <span> {{$job->salary_range}} <sup>BDT</sup></span>

            <h4>{{$job->title}}</h4>

            <!--   <p>Medical &nbsp;/&nbsp; Health Jobs</p> -->

            <ul class="social-icons">
              <li><a href="{{ url('job_details', $job->id) }}">+ View More</a></li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <br>

    <div class="main-button text-center">
      <a href="{{ url('jobs') }}">View All Jobs</a>
    </div>
  </div>
</section>
<!-- ***** Cars Ends ***** -->

<section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading dark-bg">
          <h2>Read <em>About Us</em></h2>
          <img src="assets/images/line-dec.png" alt="">
          <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="cta-content text-center">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore deleniti voluptas enim! Provident consectetur id earum ducimus facilis, aspernatur hic, alias, harum rerum velit voluptas, voluptate enim! Eos, sunt, quidem.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto nulla quo cum officia laboriosam. Amet tempore, aliquid quia eius commodi, doloremque omnis delectus laudantium dolor reiciendis non nulla! Doloremque maxime quo eum in culpa mollitia similique eius doloribus voluptatem facilis! Voluptatibus, eligendi, illum. Distinctio, non!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ***** Call to Action Start ***** -->
<br><br>
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <h2>Send us a <em>message</em></h2><br>
        <!--   <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p> -->
          <div class="main-button">
            <a href="{{ url('contact') }}">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>

@endsection