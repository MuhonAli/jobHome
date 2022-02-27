@extends('layouts.master')

@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <br>
          <br>
          <h2>Edit <em>Job</em></h2>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br>
<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
          <form action="{{ url('update_job', $job->id) }}" id="contact" action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">

              <div class="col-md-12 col-sm-12">
                <fieldset>
                  <input name="title" type="text" id="title" placeholder="Job title *" required="" value="{{$job->title}}">
                </fieldset>
              </div>

              <div class="col-md-12 col-sm-12">
                <fieldset>
                  <input name="type" type="text" id="type" placeholder="Job type *" required="" value="{{$job->type}}">
                </fieldset>
              </div>


              <div class="col-md-12 col-sm-12">
                <select name="category_id">
                  <option>Select job category *</option>
                  <?php foreach ($categories as $category) { ?>
                    <option value="{{$category->id}}" <?php if ($category->id==$job->category_id){ echo "selected";} ?> >{{$category->name}}</option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-12 col-sm-12">
                <fieldset>
                  <input name="salary_range" type="text" id="salary_range" placeholder="Salary range *" required="" value="{{$job->salary_range}}">
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <textarea name="description" rows="6" id="description" placeholder="description" required="" >{{$job->description}}</textarea>
                </fieldset>
              </div>

              <div class="col-lg-12">
                <fieldset>
                  <textarea name="requirements" rows="6" id="requirements" placeholder="requirements" required="" >{{$job->requirements}}</textarea>
                </fieldset>
              </div>

                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>

              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Update Job</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Contact Us Area Ends ***** -->
@endsection