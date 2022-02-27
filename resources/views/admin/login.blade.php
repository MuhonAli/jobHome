<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Job Home</title>

 <link rel="stylesheet" href="{{asset('admin/vendor/fontawesome-free/css/all.min.css') }}">
 <link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css') }}">
 <link rel="stylesheet" href="{{asset('admin/css/sb-admin.css') }}">
 
</head>


<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="text-align: center;">Admin Login</div>

      <div class="card-body"> 
        <form method="post" action="{{ route('adminLoginPage') }}">
          @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" value="" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" value="" required="required">
              <label for="inputPassword">Password</label>
            </div>

          </div>

          <input type="submit"class="btn btn-primary btn-block" value="Login" >

        </form>
      </div>
    </div>
  </div>

  <script src="{{asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src=""></script>

</body>

</html>
