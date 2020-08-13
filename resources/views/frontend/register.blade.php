{{-- @extends('frontendtemplate')
@section('content')

<div class="col-lg-9">
	<h2>Item Register Page</h2>
</div>


@endsection --}}




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="backend/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
          	<img src="backend/loginimg/register.jpg" class="img-fluid w-100 h-100">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>

              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
                

                 <div class="form-group">
                  <input type="file" name="user_profile" class=" form-control-file" placeholder="Profile">
                   
 
                </div>


                <div class="form-group">
                  <input type="text" name="user_name" value="" class="form-control form-control-user" placeholder="Name">
                

                </div>

               
                <div class="form-group">
                  <input type="email" name="user_email" value="" class="form-control form-control-user" placeholder="Email Address">
                
                </div>

                <div class="form-group">
                  <input type="password" name="user_password" value="" class="form-control form-control-user" placeholder="Password">
                </div>

                <div class="form-group">
                  <input type="password" name="user_cpassword" value="" class="form-control form-control-user" placeholder="Confirm Password">
               
                </div>

                <div class="form-group">
                  <input type="number" name="user_phone" value="" class="form-control form-control-user" placeholder="Phone Number">
               
                </div>

                <div class="form-group">
                  <textarea class="form-control" placeholder="Address" name="user_address"></textarea>
               
                </div>


                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account">
                
                
              </form>

              <hr>



              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
