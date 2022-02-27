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
          <h2><em>{{$job->salary_range}}</em></h2>
          <p>{{$job->title}}</p>

                       <!--  <div class="main-button">
                          <a href="#">Apply for this Job</a>
                        </div> -->
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
                  <br>

                  <div class="row" id="tabs">
                    <div class="col-lg-4">
                      <ul>
                        <li><a href='#tabs-1'><i class="fa fa-cog"></i> Job Description</a></li>
                        <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Job Requirements</a></li>
                        <!--                   <li><a href='#tabs-3'><i class="fa fa-phone"></i> Contact Details</a></li> -->
                      </ul>
                    </div>
                    <div class="col-lg-8">
                      <section class='tabs-content' style="width: 100%;">
                        <article id='tabs-1'>
              <div class="image-thumb">
                <img style="width: 400px;" src="{{asset('images')}}/{{$job->image}}" alt="">
              </div>
                          <h4>Job Description</h4>

                          {{$job->description}}


                        </article>

                        <article id='tabs-2'>
                          <h4>About Requirements</h4>

                          {{$job->requirements}}
                        </article>

                      </section><br><br><br><br>
                      @if(!empty(Auth::user()))
                      @if(Auth::user()->type==1)
                      @if(Auth::user()->id==$job->user_id)
                      <div class="main-button button-block">
                        <a href="{{ url('edit_job', $job->id) }}">Edit Job Information</a>
                        <a href="{{ url('applicant_list', $job->id) }}">Total Applicants({{$totalApplicants}})</a>
                      </div>
                      @endif
                      @else
                      @if(!empty($applied))
                      <p class="alert alert-success">You already applied on this job!</p>
                      @else
                      <div class="main-button button-block">
                        <a href="{{ url('apply_job', $job->id) }}">Apply on this Job</a>
                      </div>
                      @endif
                      @endif
                      @endif
                    </div>                 
                  </div>
                </div>
              </section>
              <!-- ***** Fleet Ends ***** -->
              @endsection