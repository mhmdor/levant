<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>images</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('index/assets/img/car6.png')}}" rel="icon">
  <link href="{{asset('index/assets/img/car6.png')}}" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
  {{-- <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{{asset('Detailsassets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('Detailsassets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{asset('Detailsassets/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('Detailsassets/css/flaticon.css')}}">
  <link href="{{asset('Detailsassets/css/style.css')}}" rel="stylesheet">


</head>

<body>

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs1">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><strong>Car Images</strong> </h2>
        
         
         <ol>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Add New Sub Images
          </button>
         </ol>

      <ol>
        <a type="button" class="btn btn-danger" href="{{ route('get-all-car')}}">Return To All Car</a>
      </ol>
    

      <ol>
        <a type="button" class="btn btn-secondary" href="{{ route('dashboard')}}">Return To Dashboard</a>
      </ol>

          <ol> 
              
            <li><a href="{{ route('get-all-car')}}"><strong>All_car</strong> </a></li>
            <li><strong>Car Images</strong> </li>
          </ol>


        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <div class="img1">
      @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(session()->has('message1'))
<div class="alert alert-success">
    {{ session()->get('message1') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     <h3>Main Image</h3> 
      <img src="{{ asset('upload/car') }}/{{$car->car_image}}" class="rounded mx-auto d-block" alt="" >
      
    </div>



    <div class="img2">
      <h3>sub images</h3>
    </div>
   
    <div class="imo">
   
   @foreach ($images as $item)
   
   <div class="ima">
   <img  src='{{asset("$item->url")}}'  class="rounded mx-auto d-block " alt="...">
   
  <div class="d-grid gap-2 col-3 mx-auto">
   
    <button class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$item->id}}" type="button">Delete This Image</button>
  </div>
   <!-- Button trigger modal -->


</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div style="background-color: rgb(214, 63, 63);color:rgb(255, 255, 255)" class="modal-body">
      Delete This Image ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{route('deleteimage',$item->id)}}" type="button" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
</div>

   @endforeach
   
  </div>

  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('createimage')}}"  enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <input type="" name="id" class="form-control" id="id" value="{{$car->id}}"  hidden>

            <label for=""><h5> Enter New Sub Image</h5></label>
            <input style="border-radius: 15px;  border-width: 3px;
            border-style: solid;
            border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
            " type="file" name="images[]" accept="image/*" class="form-control form-control-lg" multiple>
          </div> 
         
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{asset('Detailsassets/js/main.js')}}"></script>



</body>

</html>











	


		

		



