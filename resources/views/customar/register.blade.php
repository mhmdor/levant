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
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="" id="addCustomar" class="login100-form validate-form">
					@csrf
					
					<span class="login100-form-title p-b-26">
						Welcome To Levant 
					</span>
					<span class="login100-form-title p-b-48">
						<div class="logo">
							<a href="{{ route('home')}}"><img src="Carassets/img/car1.png" alt="" class="img-fluid"></a>
						  </div>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						
						<input type="text" name="fname" id="fname" class="input100">
						<span class="focus-input100" data-placeholder="First Name"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter Name">
						
						<input type="text" name="lname" id="lname" class="input100">
						<span class="focus-input100" data-placeholder="Last Name"></span>
					</div>
					
					<label style="color: rgb(144, 144, 144);font-size: 14px;" for="basic-url" class="form-label">Num Of phone</label>
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">+971</span>
						<input placeholder="5XXXXXXXX" type="text" class="form-control" name="phone" maxlength="9" title="Error Message"  pattern="[5][0-9]{8}"> 
					  </div>
					  
                   
                    
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						
						<input type="text" name="email" id="email" class="input100">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						
						<input type="password" name="password" id="password" class="input100">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						
						<input type="password" name="cpassword" id="cpassword" class="input100">
						<span class="focus-input100" data-placeholder="Confirm Password"></span>
					</div>
					

                 

                    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<main class="main_full">
	<div class="container">
		<div class="panel">
			<div class="button_outer">
				<div class="btn_upload">
					<input type="file" name="profile" id="upload_file" name="">
					Upload Image
				</div>
				<div class="processing_bar"></div>
				<div class="success_box"></div>
			</div>
		</div>
		<div class="error_msg"></div>
		<div class="uploaded_file_view" id="uploaded_view">
			<span class="file_remove">X</span>
		</div>
	</div>
</main>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							 have an account?
						</span>

						<a class="txt2" href="{{route('signin')}}">
							Sign In
						</a>
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