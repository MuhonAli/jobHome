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
          <h2>Applicants</h2>
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

    <div class="row">

      <div class="col-lg-12">
        <div class="row">
        <br><br>
        <div class="search-area">
<div class="input-group pull-right">

</div>
        </div>
        @foreach($applicants as $key => $applicant)
        <div class="col-md-10 offset-lg-1">
          <div class="trainer-item">
            <div class="down-content">
              <h4>{{$applicant->name}}</h4>

              <p>{{$applicant->email}}</p>
              <ul class="social-icons">
              	<?php if (!empty($applicant->cv)) { ?>
                <li><a href="{{ url('assets/images/cv') }}/{{$applicant->cv}}" target="_blank">View CV</a></li>
            <?php } else{ ?>
            	  <li><p>No CV attached</p></li>
            <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</div>
</section>
@endsection