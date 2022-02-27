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
          <h2>Applied <em>Jobs</em></h2>
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
        @foreach($jobs as $key => $job)
        <div class="col-md-10 offset-lg-1">
          <div class="trainer-item">
            <div class="down-content">
              <span> <sup></sup>{{$job->salary_range}}</span>

              <h4>{{$job->title}}</h4>

              <p>{{$job->description}}</p>

              <ul class="social-icons">
                <li><a href="{{ url('job_details', $job->id) }}">View More</a></li>
                <?php if (Auth::user()->type==1) { ?>
                <li><a href="{{ url('edit_job', $job->id) }}">Edit</a></li>
                <li><a href="{{ url('delete_job', $job->id) }}">Delete</a></li>
              <?php } ?>

              </ul>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>



  <br>

<!--   <nav>
    <ul class="pagination pagination-lg justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav> -->

</div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection