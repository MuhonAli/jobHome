

<div id="content-wrapper">

  <div class="container-fluid">



    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
         <span style="margin-left: 40%;">Name : <strong><?php echo $userName; ?></strong></span></div>

        <div class="card-body">
          <div class="table-responsive">

            <?php  if($this->session->flashdata('message')){
             echo $this->session->flashdata('message');}
           
           ?>
           <form method="post" action="<?php echo base_url() ?>Admin/give_access/<?=$userId?>">
           <table class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Genre Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              
              <?php  $count=1; foreach($genres as $genre){ ?>
                <tr>
                  <td><?=$count?></td>
                  <td><?=$genre['name']?></td>
              
                  <td><input type="checkbox" name="genreId[]" value="<?=$genre['id']?>" <?php  foreach($genreAccess as $access){  if($access['genre_id']==$genre['id']){echo "checked";} } ?>></td>
                </tr>
                <?php $count++; } ?>
              </tbody>
            </table>
            <input style="float: right;" type="submit" name="submit" class="btn btn-info">
          </form>
          </div>
        </div>
        
      </div>

      
    </div>
    <!-- /.container-fluid -->


