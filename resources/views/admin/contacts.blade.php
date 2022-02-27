
@extends('layouts.masterAdmin')

@section('content')

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card mb-3">
     <div class="card-header"> 
               <span><a href="">Contacts</a></div>
        <!-- //modal -->
        <div class="card-body">
          <div class="table-responsive">

           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
              </tr>
            </thead>
            <tbody>

              <?php  $count=1; foreach($contacts as $contact){ ?>
                <tr>
                  <td><?=$count?></td>
                  <td><?=$contact['name']?></td>
                  <td> <?=$contact['email']?> </td>
                  <td><?=$contact['subject']?></td>
                  <td><?=$contact['message']?></td>
                </tr>


                <!-- Modal -->
                <div id="myModal2-<?=$contact['id']?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <center><h3>Edit contact</h3></center><br>
                        <form method="post" action="Video_contact/edit_contact/<?=$contact['id']?>">
                          <input type="text" name="name" placeholder="contact Name" value="<?=$contact['name']?>" class="form-control" required=""><br>

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
                <div id="myModal3-<?=$contact['id']?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <center><p>Are you sure to Delete this contact?</p></center><br>
                        

                        <center>          <div class="btn-group text-center">
                          <button onclick="location.href ='Video_contact/delete_contact/<?=$contact['id']?>';" type="button" class="btn btn-danger" style="margin-right: 10px;">Yes</button>
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