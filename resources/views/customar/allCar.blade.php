<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Car Rental</title>

        <!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
     

		<link rel="stylesheet" href="{{asset('Carassets/css/style.css')}}">

   
    </head>

    <body>

 		<!-- ======= Header ======= -->
		 <header id="header" class="d-flex align-items-center ">
			<div class="container d-flex align-items-center justify-content-between">
		
			  
		
				<nav id="navbar" class="navbar order-last order-lg-0">
					<ul>
					  <li><a href="{{ route('home')}}" class="nav-link scrollto active" href="#hero">Home</a></li>
					   <li><a href="{{ route('home')}}" class="nav-link scrollto" href="#hero1">About</a></li> 
			
			
			
					  <li><a href="{{ route('home')}}" class="nav-link scrollto" href="#contact">Contact</a></li>
						@if (session()->has("loggedUser"))
						<li> <a href="/get-Account" class="{{Request::routeIs("get-Account") ?'activess' : ""}}">Account</a></li>
						<li> <a href="{{ route('logouts')}}" class="{{Request::routeIs("loggouts") ?'activess' : ""}}">Logout</a></li>
						@else
						<li>  <a href="{{ route('signup')}}" class="{{Request::routeIs("signup") ?'activess' : ""}}">Register</a></li>
						<li> <a href="{{ route('signin') }}" class="{{Request::routeIs("signin") ?'activess' : ""}}">Login</a></li>
						@endif
			
				   
					 
					  
					</ul>
					<i class="bi bi-list mobile-nav-toggle"></i>
				  </nav><!-- .navbar -->
			  <div class="logo">
				<a href="{{ route('home')}}"><img src="Carassets/img/levant2.png" alt="" class="img-fluid"></a>
			  </div>
			</div>
		  </header><!-- End Header -->

		  <div style="height:80px;"></div>








		<!-- Wrapper -->
    	<div class="wrapper">

			<!-- Sidebar -->
			<nav class="sidebar">
				
				<!-- close sidebar menu -->
				<div class="dismiss">
					<i class="fas fa-arrow-left"></i>
				</div>
				
				<div class="logo">
					<h3><a href="{{route('home')}}">Levant</a></h3>
				
				</div>
				
				<ul class="list-unstyled menu-elements filters ">
					<li>
						<a href="{{route('cars')}}"   >
							<i class="fas fa-stream"></i>Reset All Car
						</a>
				
					</li>
					<li>
						<a href="#otherSections5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Brand
						</a>
						<ul class="collapse list-unstyled" id="otherSections5">
						     
								<li>
									<a  class="btn btn-filter checked" data-filter="">All</a>
								</li>
								@foreach ($brand as $item)
								<li>
									
									
								<a   class="btn btn-filter" data-filter=".{{$item->car_brand_name}}">{{$item->car_brand_name}}</a>
								@endforeach
		      					</li>
							
						</ul>
					</li>
					<li>
						<a href="#otherSections1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Category
						</a>
						<ul class="collapse list-unstyled" id="otherSections1">
						     
								<li>
									<a  class="btn btn-filter checked" data-filter="">All</a>
								</li>
								@foreach ($category as $item)
								<li>
									
									
								<a   class="btn btn-filter" data-filter=".{{$item->car_cat_name}}">{{$item->car_cat_name}}</a>
								@endforeach
		      					</li>
							
						</ul>
					</li>
					<li>
						<a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Color Car
						</a>

					
						
						<ul class="collapse list-unstyled" id="otherSections">
							<li>
								<a class="btn btn-filter checked" data-filter="">All</a>
							</li>
							<li>
								<a style="color:Black " class="btn btn-filter" data-filter=".Black">Black</a>
							</li>
							<li>
								<a style="color:White " class="btn btn-filter" data-filter=".White">White</a>
							</li>
							<li>
								<a style="color:Gray " class="btn btn-filter" data-filter=".Gray">Gray</a>
							</li>
							<li>
								<a style="color:Silver " class="btn btn-filter" data-filter=".Silver">Silver</a>
							</li>
							<li>
								<a style="color:Blue " style="color:Black " class="btn btn-filter" data-filter=".Blue">Blue</a>
							</li>
							<li>
								<a style="color:Green " class="btn btn-filter" data-filter=".Green">Green</a>
							</li>
							<li>
								<a style="color:Gold " class="btn btn-filter" data-filter=".Gold">Gold</a>
							</li>
							<li>
								<a  style="color:Brown " class="btn btn-filter" data-filter=".Brown">Brown</a>
							</li>
							<li>
								<a style="color:Orange " class="btn btn-filter" data-filter=".Orange">Orange</a>
							</li>
							<li>
								<a style="color:Yellow " class="btn btn-filter" data-filter=".Yellow">Yellow</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#otherSections4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Num door
						</a>

					
						
						<ul class="collapse list-unstyled" id="otherSections4">
							<li>
								<a class="btn btn-filter checked" data-filter="">All</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".2">Two</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".3">Three</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".4">Four</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".6">More</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#otherSections2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
							<i class="fas fa-stream"></i>Gear
						</a>
						<ul class="collapse list-unstyled" id="otherSections2">
							<li>
								<a  class="btn btn-filter checked" data-filter="">All</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".Automatic">Automatic</a>
							</li>
							<li>
								<a class="btn btn-filter" data-filter=".Manual">Manual</a>
							</li>
						</ul>
					</li>
				
					</li>
					
				</ul>
				
				<div class="to-top">
					<a class="btn btn-primary btn-customized-3" href="#" role="button">
	                    <i class="fas fa-arrow-up"></i> Top
	                </a>
				</div>
				
			
			
			</nav>
			<!-- End sidebar -->
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">

		
			
				<!-- open sidebar menu -->
				<a class="btn btn-primary btn-customized open-menu" href="#" role="button">
                    <i class="fas fa-align-left"></i> <span>Filtter</span>
                </a>
			
				
				<section class="container" >
					
				
						<!-- This is the Isotope grid that contains all the elements to be filtered
						The JS references the item class to define which element to sort, filter and apply masonry layout to the item class could be renamed to anything you want e.g. card, product etc. and the JS from itemSelector: '.item' -->

						<div  class=" container  " >
                  
                        
				
				
					<div class="row">
				
						
						@foreach ($cars as $car) 
						
						
							<div     class=" item {{$car->type_gear}} {{$car->car_color}} {{$car->num_door}} {{$car->car_category->car_cat_name}} {{$car->car_brand->car_brand_name}}"   >	
				 <hr>
					<a href="{{ route('car-detail', $car->id) }}">
					 <div class="profile-card-4 text-center"  > 
						 <div class="img1"><img src="{{ asset('upload/car') }}/{{$car->car_image}}" class="rounded" alt="" class="img img-responsive"></div>
						<div class="profile-content">
							
							<div class="profile-description">{{$car->car_model->car_model_name}}</div>
						<div class="protofile-img" style>	<img   src='{{asset("upload/car-category/".$car->car_brand->car_image)}}' alt='{{$car->car_brand->car_brand_name}}' ></div>
							<div class="profile-description1">{{$car->car_price}} AED/DAY </div>
							<div class="profile-description2">More Information</div>
							
							
							
					
					
					</div>
                   
				 </div>
					   </div>
					</a>
					
				 @endforeach
				 
		        
						
					
				</section>
					
		
				  
			
				
		        
			</div>   
        
        </div>



		
        <!-- End wrapper -->




		


		



        <!-- Javascript -->
		
		
		<script src="{{asset('Carassets/js/jquery-3.3.1.min.js')}}"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{asset('Carassets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('Carassets/js/scripts.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>

		 
		 

    </body>

</html>