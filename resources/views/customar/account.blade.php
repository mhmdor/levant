
	


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Accountassets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Accountassets/css/util.css">
	<link rel="stylesheet" type="text/css" href="Accountassets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Accountassets/images/img-01.png" alt="IMG">
				</div>

				<div class="login100-form validate-form">
					<span class="login100-form-title">
						My Account
					</span>

					<div class="wrap-input100 validate-input" >
						<a href="{{ route('update-profile') }}"style="color: aliceblue"  class="login100-form-btn">
							update My Profile
						</a>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input"data-toggle="modal" data-target=".bd-example-modal-lg" >
						<a style="color: aliceblue" class="login100-form-btn">
							My Rent Car
						</a>
						<span class="focus-input100"></span>
						
					</div>

					<div class="wrap-input100 validate-input" >
						<a style="color: aliceblue" href="" class="login100-form-btn">
							Delete My Account
						</a>
						<span class="focus-input100"></span>
						
					</div>
					<div class="wrap-input100 validate-input" >
						<a href={{route('home')}} style="color: aliceblue"  class="login100-form-btn1">
							Return Home
                        </a>
						<span class="focus-input100"></span>
						
					</div>

					
					



  
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>My Books</strong> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
			@foreach($bookCar as $car) 
			<div style="margin-bottom: 20px;border-radius: 8px;
			border-width: 4px; border-color: #151515;
			border-style: solid;" class="card text-center">
				<div style="background-color:rgb(165, 165, 165) " class="card-header">
					<h3 style="color: rgb(0, 0, 0)"><strong>Book Status</strong> </h3>
				</div>
				<div class="card-body">
			
						
					
				  <h2 style="margin-bottom: 30px;color: rgb(126, 25, 25)"><strong>{{$car->book_car->car_model->car_model_name}}  {{$car->book_car->year}}</strong>   </h2>
	
				  <h4 style="margin-bottom: 20px; color: rgb(95, 94, 105)" class="card-title"> <strong> Delivery time :  {{$car->time}}  </strong></h4>
				  <h4 style="margin-bottom: 20px; color: rgb(0, 0, 0)" class="card-text"><strong>Cost : {{$car->days * $car->book_car->car_price}} AED / Days : {{$car->days}}</strong> </h4>
				  <h4 style="margin-bottom: 20px;color: rgb(95, 94, 105)" class="card-title"> <strong>From :  
					{{ \Carbon\Carbon::parse($car->start_book)->format('d-m-Y') }} /
			To :  {{ \Carbon\Carbon::parse($car->end_book)->format('d-m-Y') }}</strong> </h4>
				</div>
				<div style="background-color: rgb(165, 165, 165)" class="card-footer text-muted">
					@if ($car->book == 'not confirm')
					<h4 style="color: rgb(208, 24, 24)"><strong>status :	{{$car->book}}</strong> </h4>
					@else
					<h4 style="color: rgb(13, 137, 13)"><strong>status :	{{$car->book}}</strong> </h4>
					@endif
			
			
				</div>
			  </div>
              
			  @endforeach 
			  
               {{-- <div class='table-responsive'>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        
                        <th>Car Name</th>
                        <th>Days</th>
						<th>Start</th>
						<th>End</th>
						<th>Time</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Confirm</th>
                   
                    </tr>
                </thead>
               

            @foreach($bookCar as $car) 
               <tr>
                   
                    <td>{{$car->book_car->car_brand->car_brand_name}}</td>
                    <td>{{$car->days}}</td>
					<td>{{$car->start_book}}</td>
					<td>{{$car->end_book}}</td>
					<td>{{$car->time}}</td>
                    <td> {{$car->book_car->car_price}} AED</td>
                    <td> {{$car->days * $car->book_car->car_price}} AED</td>
                    <td>{{$car->book}}</td>

                </tr>
            

                
            @endforeach 
            
                </table>
            </div>
               --}}
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Ok</button>
        </div>
      </div>
    </div>
  </div>
					

	

	
<!--===============================================================================================-->	
	<script src="Accountassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Accountassets/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="Accountassets/js/main.js"></script>

</body>
</html>

