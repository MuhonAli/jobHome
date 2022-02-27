
@extends('layouts.masterAdmin')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header"> 
               <span><a href="">Job List</a></div>
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <center><h3>Add job</h3></center><br>
                <form method="post" action="{{route('add_job')}}">
                @csrf
                  <input type="text" name="name" placeholder="job Name" class="form-control" required=""><br>
                  <center><button type="submit" class="btn btn-primary btn-block">Submit</button></center>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>

        <!-- //modal -->
        <div class="card-body">
          <div class="table-responsive">

           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>job Title</th>
                <th>Details</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php  $count=1; foreach($jobs as $job){ ?>
                <tr>
                  <td><?=$count?></td>
                  <td><?=$job['title']?></td>
                  <td><a target="_blank" href="{{url('job_details')}}/<?=$job['id']?>" ><i class="fa fa-eye"></i> View</a></td>
                  <td><a href=""  data-toggle="modal" data-target="#myModal3-<?=$job['id']?>"><i class="fa fa-trash"></i> Delete</a></td>
                </tr>


                <!-- Modal -->
                <div id="myModal2-<?=$job['id']?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <center><h3>Edit job</h3></center><br>
                        <form method="post" action="Video_job/edit_job/<?=$job['id']?>">
                          <input type="text" name="name" placeholder="job Name" value="<?=$job['name']?>" class="form-control" required=""><br>

                          <center><button type="submit" class="btn btn-primary btn-block">Update</button></center>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

                <!-- //modal -->


                <!-- Modal -->
                <div id="myModal3-<?=$job['id']?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <center><p>Are you sure to Delete this job?</p></center><br>
                        

                        <center>          <div class="btn-group text-center">
                          <button onclick="location.href ='Video_job/delete_job/<?=$job['id']?>';" type="button" class="btn btn-danger" style="margin-right: 10px;">Yes</button>
                          <button type="button" class="btn btn-success" data-dismiss="modal" style="margin-left: 10px;">No</button>
                        </div></center>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>

                <!-- //modal -->



                <?php $count++; } ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>

      
    </div>
    <!-- /.container-fluid -->


    @endsection