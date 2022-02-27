<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Job Home</title>

 <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}">
 <link rel="stylesheet" href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}">
 <link rel="stylesheet" href="{{ asset('admin/css/sb-admin.css') }}">
 
</head>

<body id="page-top">


  <!-- start nabvar -->


  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{url('adminDashboard')}}">Job Home
    </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">

      </div>
    </div>
  </form>

  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0">

    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{url('adminLogin')}}">Logout</a>
      </div>
    </li>
  </ul>

</nav>

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item"><a class="nav-link" href="{{url('job_list')}}"><i class="fas fa-sign-language"></i><span> Jobs</span></a></li>

    <li class="nav-item"><a class="nav-link" href="{{url('categories')}}"><i class="fas fa-list-alt"></i><span> Categories </span></a></li>

    <li class="nav-item"><a class="nav-link" href="{{url('admin_contacts')}}"><i class="fas fa-list-ol"></i><span> Contacts</span></a></li>


  </ul>
  <!-- end nabvar -->

@yield('content')
  <!-- start footer -->


  <!-- Sticky Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright©jobhome2021</span>
      </div>
    </div>
  </footer>

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="AdminLogout">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/js/sb-admin.min.js') }}"></script>
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>

</body>

</html>

<style>
  iframe {
    height: 200px;
    width: 400px;
  }
</style>
  <!-- end footer -->