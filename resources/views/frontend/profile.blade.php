@extends('frontendtemplate')
@section('content')

<div class="col-lg-9">
	{{-- <h2 class="text-center">Customer Profile Page</h2> --}}



	<div class="container">
    {{-- {{Auth::user()}} --}}
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-3"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
               {{--  <h1 class="h4 text-gray-900 mb-4">My Profile</h1> --}}
              </div>

              <form class="user" method="POST" action="backend/signup.php" enctype="multipart/form-data">
                

                 <div class="form-group row">
                 {{--  <input type="file" name="user_profile" class=" form-control-file" placeholder="Profile"> --}}
                 <div class="col-lg-3"></div>
                 <div class="col-lg-3"> 
                 	<img src="{{asset('backend/loginimg/profile.jpg')}}" style="border-radius: 50%; width: 150px; height: 150px">
                 </div>
                  
 
                </div>


                <div class="form-group">
                  <input type="text" name="user_name" value="{{Auth::user()->name}}" class="form-control form-control-user" placeholder="Name">
                

                </div>

               
                <div class="form-group">
                  <input type="email" name="user_email" value="{{Auth::user()->email}}" class="form-control form-control-user" placeholder="Email Address">
                
                </div>

                {{-- <div class="form-group">
                  <input type="password" name="user_password" value="" class="form-control form-control-user" placeholder="Password">
                </div> --}}

                {{-- <div class="form-group">
                  <input type="password" name="user_cpassword" value="" class="form-control form-control-user" placeholder="Confirm Password">
               
                </div> --}}

              {{--   <div class="form-group">
                  <input type="text" name="user_phone" value="{{Auth::user()->password}}" class="form-control form-control-user" placeholder="Role Number">
               
                </div> --}}

                {{-- <div class="form-group">
                  <textarea class="form-control" placeholder="Address" name="user_address"></textarea>
               
                </div> --}}


                <input type="submit" class="btn btn-primary btn-user btn-block" value="Change">
                
                
              </form>

              <hr>



             {{--  <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.html">Already have an account? Login!</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


@endsection