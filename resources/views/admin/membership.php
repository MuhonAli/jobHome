

<div id="content-wrapper">

  <div class="container-fluid">

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
      Members</div>
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
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Action</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>

            <?php  $count=1; foreach($membership as $user){ ?>
              <tr>
                <td><?=$count?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['phone']?></td>
                 <td><a href="<?=base_url()?>Admin/access_page/<?=$user['id']?>"><i class="fa fa-check-square"></i> Give Access</a></td>
                <td><a href="<?=base_url()?>Admin/delete_user/<?=$user['id']?>">Delete</a></td>
              </tr>

              <?php $count++;   }?>

            </tbody>
          </table>
        </div>
      </div>
      
    </div>


  </div>
  <!-- /.container-fluid -->


