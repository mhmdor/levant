<x-layouts>
	<x-slot name="title">Sign Out</x-slot>
    <x-slot name="content">
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Out</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
		
	<div class="limiter">
        @if (session()->has("danger"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{session("danger")}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @if (session()->has("success"))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{session("success")}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        @if (session()->has("error"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{session("error")}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
		<div class="container-login100">
			<div class="wrap-login100">
                <form action="" id="update-profile" method="POST" enctype="multipart/form-data">
					@csrf
					
					<span class="login100-form-title p-b-26">
						Update Your Information
					</span>
					{{-- <span class="login100-form-title p-b-48">
						<div class="logo">
							<a href="{{ route('home')}}"><img src="Carassets/img/car1.png" alt="" class="img-fluid"></a>
						  </div>
					</span> --}}

					<label style="color: rgb(144, 144, 144);font-size: 14px;" for="basic-url" class="form-label">First Name</label>
					<div class="input-group mb-3">
						
						<input type="text"value="{{$profile->fname}}" name="edit_fname" id="edit_fname" class="form-control">
			
					</div>

                    <label style="color: rgb(144, 144, 144);font-size: 14px;" for="basic-url" class="form-label">Last Name</label>
					<div class="input-group mb-3">
						
						<input type="text"value="{{$profile->lname}}" name="edit_lname" id="edit_lname" class="form-control">
			
					</div>
					
					<label style="color: rgb(144, 144, 144);font-size: 14px;" for="basic-url" class="form-label">Num Of phone</label>
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">+971</span>
						<input placeholder="5XXXXXXXX" value="{{$profile->phone}}" type="text" class="form-control" name="edit_phone" id="edit_phone" maxlength="9" title="Error Message"  pattern="[5][0-9]{8}"> 
					  </div>
					  
                   
                    
                      <label style="color: rgb(144, 144, 144);font-size: 14px;" for="basic-url" class="form-label">Last Name</label>
                      <div class="input-group mb-3">
                          
                          <input type="text"value="{{$profile->email}}" name="edit_email" id="edit_email" class="form-control">
              
                      </div>
					

                 

                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Update Your Profile
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->

	<script src="js/main1.js"></script>

</body>
</html>
</x-slot>
</x-layouts>