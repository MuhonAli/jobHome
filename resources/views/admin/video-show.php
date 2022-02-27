

<div id="content-wrapper">

  <div class="container-fluid">



    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>

        Videos <span style="margin-left: 30%;"><a href="" data-toggle="modal" data-target="#myModal"><i class="fas fa-plus"> Add new video</i></a></span></div></div>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <center><h3>Add Video</h3></center><br>
                <form method="post" action="<?php echo base_url() ?>Videos/add_video" enctype="multipart/form-data">
                  <input type="text" name="title" placeholder="Video Title" class="form-control" required=""><br>
                  <textarea type="text" name="video_url" placeholder="Video URL" class="form-control" required=""></textarea><br>

                  <input type="file" class="form-control"  name="thumbnail" placeholder="Enter Thumbnail"><br>

                  <select type="text" name="category_id" class="form-control" required="">
                    <?php foreach ($video_category as $category) { ?>
                      <option value="<?=$category['id']?>"><?=$category['name']?> </option>
                    <?php } ?>
                  </select><br>
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

            <?php  if($this->session->flashdata('message')){

             echo $this->session->flashdata('message');
           }

           ?>
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th width="350">Video</th>
                <th width="350">Thumbnail</th>
                <th width="500">Video Title</th>
                <th>Video Category</th>
                <th>Action</th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php  $count=1; foreach($videos as $video){ ?>
                <tr>
                  <td><?=$count?></td>
                  <td width="300"><?=$video['video_url']?></td>
                  <td><img width="200" src="<?= base_url()?>asset/images/<?=$video['thumbnail']?>" alt="image"></td>
                  <td><?=$video['title']?></td>
                  <?php foreach ($video_category as $category) { 
                    if ($category['id'] == $video['category_id']) { ?>
                      <td width="500"><?=$category['name']?></td>
                    <?php } } ?>
                    <td><a href="" data-toggle="modal" data-target="#myModal2-<?=$video['id']?>" ><i class="fa fa-edit"></i> Edit</a></td>
                    <td><a href="" data-toggle="modal" data-target="#myModal3-<?=$video['id']?>" ><i class="fa fa-trash"></i> Delete</a></td>
                  </tr>
                  <?php $count++; ?>

                  <!-- Modal -->
                  <div id="myModal2-<?=$video['id']?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <center><h3>Edit Video</h3></center><br>
                          <form method="post" action="<?php echo base_url() ?>Videos/edit_video/<?=$video['id']?>" enctype="multipart/form-data">
                            <input type="text" name="title" placeholder="Enter Video Title" class="form-control" required="" value="<?=$video['title']?>"><br>
                            <textarea name="video_url" placeholder="Enter new iframe if you want to replace the current video" class="form-control"></textarea><br>
                            <input type="file" class="form-control"  name="thumbnail" placeholder="Enter Thumbnail"><br>
                            <select type="text" name="category_id" value="" class="form-control" required="">
                              <?php foreach ($video_category as $category) { ?>
                                <option value="<?=$category['id']?>" <?php if ($category['id']==$video['category_id']) { echo 'selected'; } ?> ><?=$category['name']?></option>
                              <?php } ?>
                            </select><br>
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



                  <!-- Modal -->
                  <div id="myModal3-<?=$video['id']?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <center><p>Are you sure to Delete this Video?</p></center><br>
                          

                          <center>          <div class="btn-group text-center">
                            <button onclick="location.href ='<?=base_url()?>Videos/delete_video/<?=$video['id']?>';" type="button" class="btn btn-danger" style="margin-right: 10px;">Yes</button>
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
                <?php   } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>


    </div>
    <!-- /.container-fluid -->


