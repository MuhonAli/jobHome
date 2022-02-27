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
          <h2>My <em>Jobs</em></h2>
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
         <div class="main-button button-block col-lg-2 offset-lg-5">
          <a href="{{ url('add_job') }}">Add New Job</a>
        </div>
        <br><br>
        <div class="search-area">
          <div class="input-group pull-right">
            <div class="form-outline">
              <form action="{{ url('my_jobs') }}" id="contact" method="get">
                @csrf
                <input id="search-input" type="search" id="form1" class="form-control" placeholder="search..." name="search" />
              </div>
              <button id="search-button" type="submit" class="btn btn-primary" style="height: 40px;">
                <i class="fa fa-search"></i>
              </button>
            </form>
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
                <li><a href="{{ url('edit_job', $job->id) }}">Edit</a></li>
                <li><a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete">Delete</a></li>

              </ul>
            </div>
          </div>
        </div>

        <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                Are you sure to delete this? 
              </div>
              <div class="modal-body">
                <center><a class="btn btn-success" href="{{ url('delete_job', $job->id) }}">Yes</a>
                  <a class="btn btn-danger" href="#" data-dismiss="modal">No</a></center>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
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