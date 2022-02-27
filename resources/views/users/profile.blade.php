@extends('layouts.master')

@section('content')

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
  <div class="container">
    <div class="row">
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
          <div class="col-md-8 offset-md-2">
            <div class="">
              <h3><strong>Name :</strong> {{Auth::user()->name}}</h3><br>
              <h3><strong>Email :</strong> {{Auth::user()->email}}</h3><br>
              
              <h3><strong>CV :</strong> <a href="assets/images/cv/{{Auth::user()->cv}}" target="_blank">{{Auth::user()->cv}}</a></h3>
            </div>

            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
              Edit profile
            </button>

            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Update Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">


                    <form action="{{ url('update_profile') }}" id="contact" action="" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">

                        <div class="col-md-12 col-sm-12">
                          <label>Name :</label>
                          <input class="form-control" name="name" type="text" id="name" placeholder="Enter Your Name" required="" value="{{Auth::user()->name}}"><br>
                        </div>

                        <div class="col-md-12 col-sm-12">
                          <label>Email</label>
                          <input class="form-control" name="email" type="text" id="email" placeholder="Enter Your Email *" required="" value="{{Auth::user()->email}}" disabled=""><br>
                        </div>

                        <div class="col-md-12 col-sm-12">
                          <label>Upload CV (img/pdf)</label>
                          <input  type = "file" class="form-control" name="cv" id="cv">
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                      </div>
                    </form>

                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!-- ***** Fleet Ends ***** -->
@endsection