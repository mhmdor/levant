<x-app-layout>
    <x-slot name="title">Car</x-slot>

    <x-slot name="content">
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
  
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
  
      <title> Admin 2 - Tables</title>
  
      <!-- Custom fonts for this template -->
      <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
      <link
          href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}" rel="stylesheet">
  
      <!-- Custom styles for this template -->
      <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
  
      <!-- Custom styles for this page -->
      <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  
  </head>
  
  <body id="page-top">
  
    <div class="jumbotron">
      <h1 class="display-4">All Car {{$Type}}!</h1>
      
    </div>
   @if ($cars->count()>0)
                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ads in Car Rental</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                      <tr>
                                        <td>Car id</td>
                                        <td>Car Brand</td>
                                        <td>Car Name</td>
                                        <td>Year</td>
                                        <td>Color</td>
                                        <td>Car price</td>
                                        <th>Status</th>
                                       
                           
                                      </tr>
                                    </thead>
                                    <tfoot>
                                      <tr>
                                        <td>Car id</td>
                                        <td>Car Brand</td>
                                        <td>Car Name</td>
                                        <td>Year</td>
                                        <td>Color</td>
                                        <td>Car price</td>
                                        <th>Status</th>
                                        
                                       
                                       
                                      </tr>
                                    </tfoot>
                                    <tbody>
                                      @foreach ($cars as $ad)
                                       
         <tr>
            <th scope="row">{{$ad->id}}</th>
            <td>{{$ad->car_brand->car_brand_name}}</td>
            <td>{{$ad->car_model->car_model_name}}</td>
            <td>{{$ad->year}}</td>
            <td>{{$ad->car_color}}</td>
            <td>{{$ad->car_price}}</td>
            <td>
        

              @if($ad->status==0)

             <form method="POST" action="{{route('statusCar',['id'=>$ad->id])}}">
              @csrf
              <input name="status" type="hidden" value=1>
              <button  class="btn btn-success"> make online  </button>  
             </form>
             
             @elseif($ad->status==1)
             {{-- <form method="POST" action="{{route('statusCar',['id'=>$ad->id])}}">
              @csrf
              <input name="status" type="hidden" value=2>
              <button  class="btn btn-success"> make reservation </button>  
             </form> --}}
             <form method="POST" action="{{route('statusCar',['id'=>$ad->id])}}">
              @csrf
              <input name="status" type="hidden" value=0>
              <button  class="btn btn-danger"> make offline </button>  
             </form>

             @elseif($ad->status==2)
             <form method="POST" action="{{route('statusCar',['id'=>$ad->id])}}">
              @csrf
              <input name="status" type="hidden" value=1>
              <button  class="btn btn-success"> make online </button>  
             </form>

             @endif
             
           
              
            </td>
           
            
           
          </tr>
          @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
    @else
    <div class="alert alert-danger" role="alert">
      No Car Here !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    </div>
    @endif
  
  
  
  
  
  
  <div>
  
    
  
  
  </div></div></div>
  
      
  
     
  
  </body>
  
  </html>
</x-slot>
</x-app-layout>