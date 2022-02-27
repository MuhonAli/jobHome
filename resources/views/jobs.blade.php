@extends('layouts.master')

@section('content')

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <br>
          <br>
          <h2>Our <em>Jobs</em></h2>
          <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
  <div class="container">
    <br>
        <div class="col-md-12 search-area">
          <div class="input-group pull-right">
            <div class="form-outline">
              <form action="{{ url('jobs') }}" id="contact" method="get">
                @csrf
                <input id="search-input" type="search" id="form1" class="form-control" placeholder="search..." name="search" value="<?php if(!empty($keyword)){ echo $keyword;} ?>" />
              </div>
              <button id="search-button" type="submit" class="btn btn-primary" style="height: 40px;">
                <i class="fa fa-search"></i>
              </button>
                <br>
            </form>
          </div>

        </div>
            

    <div class="row">

      <div class="col-lg-12">
        <div class="row">

          @foreach($jobs as $key => $job)
          <div class="col-lg-4">
            <div class="trainer-item">
              <div class="image-thumb">
                <img style="height: 180px;"  src="{{asset('images')}}/{{$job->image}}" alt="">
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
 {{$jobs->links()}}     
      </div>

    </div>


  </div>
</section>
<!-- ***** Fleet Ends ***** -->

@endsection