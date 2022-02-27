

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
             Service needed Users</div>
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
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Occupation</th>
                    <th>Selling Online</th>
                    <th>Website</th>
                    <th>selling on amazon</th>
                    <th>Amazon Seller account</th>
                    <th>Business Investment</th>
                  </tr>
                </thead>
                <tbody>
         
        <?php  $count=1; foreach($users as $user){ ?>
                  <tr>
                    <td><?=$count?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                    <td><?=$user['address']?></td>
                    <td><?=$user['phone']?></td>
                    <td><?=$user['occupation']?></td>
                    <td><?=$user['selling_online']?></td>
                    <td><?=$user['website']?></td>
                    <td><?=$user['selling_amazon']?></td>
                    <td><?=$user['amazon_seller_account']?></td>
                    <td>$<?=$user['amount_of_investment']?></td>
                  </tr>


        <?php $count++;   }?>
                  
                </tbody>
              </table>
            </div>
          </div>
      
        </div>

  
      </div>
      <!-- /.container-fluid -->


