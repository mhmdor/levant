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
                            <h6 class="m-0 font-weight-bold text-primary">Levant Car Rental</h6>
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
                                        <td>Car Category</td>
                                        <td>Car price</td>
                                        <td>Image</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        <td>Type Of Fuel</td>
                                        <td>Car Gear</td>
                                        <td>Num Of DOOR</td>
                                        <td>kilometer</td>
                                       
                           
                                      </tr>
                                    </thead>
                                    <tfoot>
                                      <tr>
                                        <td>Car id</td>
                                        <td>Car Brand</td>
                                        <td>Car Name</td>
                                        <td>Year</td>
                                        <td>Color</td>
                                        <td>Car Category</td>
                                        <td>Car price</td>
                                        <td>Image</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                        <td>Type Of Fuel</td>
                                        <td>Car Gear</td>
                                        <td>Num Of DOOR</td>
                                        <td>kilometer</td>
                                        
                                       
                                       
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
            <td>{{$ad->car_category->car_cat_name}}</td>
            <td>{{$ad->car_price}}</td>
           <!-- Button trigger modal -->
  <td> 
    <a href="{{route('image',$ad->id) }}" 
      class="btn btn-info ">
   Show
    </a>
   
   
</td>
<td><button class='btn btn-success' data-id='{{$ad->id}}' id='car-edit-btn' data-toggle='modal' data-target='#edit-car'>Edit</button></td>
<td><button class='btn btn-danger' data-id='{{$ad->id}}' id='car-delete-btn'>Delete</button></td>
            <td>{{$ad->car_fuel->car_fuel_name}}</td>
            
            <td>{{$ad->type_gear}}</td>
           <td>{{$ad->num_door}}</td>
           <td>{{$ad->kilometer}}</td>
           
          
           
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
  
  
  
    <div class="modal fade" id="edit-car" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div style="background-color: rgb(57, 57, 57)" class="modal-dialog" role="document">
      <div style="background-color: rgb(57, 57, 57)" class="modal-content">
          <div style="background-color: rgb(42, 41, 41)" class="modal-header">
              <h3 style="color: rgb(164, 21, 21)" class="modal-title" id="staticBackdropLabel"><strong>Enter New  Information Car</strong> </h3>
              <button style="background-color: rgb(209, 23, 23)" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
            <div class="modal-body">
                <form action="" id="editcars">
                    @csrf
                    <div id="car-form-data"></div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
  
  
  <div>
  
    
  
  
  </div></div></div>
  
      
  
     
  
  </body>
 
  </html>
</x-slot>
</x-app-layout>