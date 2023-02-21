<x-app-layout>
    <x-slot name="title">Dashborad</x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            @if (Auth::user()->roll == 1)


                <ol class="breadcrumb mb-4">










                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <h3>Books</h3>
                                    <span class="counter-value">{{ count($car_books) }}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counter pink">
                                    <div class="counter-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <h3>Cars</h3>
                                    <span class="counter-value">{{ count($cars) }}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counter">
                                    <div class="counter-icon">
                                        <i class="fa fa-child"></i>
                                    </div>
                                    <h3>customer</h3>
                                    <span class="counter-value">{{ count($customars) }}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="counter pink">
                                    <div class="counter-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <h3>Brand</h3>
                                    <span class="counter-value">{{ count($brands) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>









                </ol>

                <div class="row">











                    <div class="col-xl-3 col-md-6">
                        <a href="{{ route('get-all-car') }}" style="align-items: center"
                            class="btn btn-outline-secondary  mb-4">

                            <div class="card-body">

                                <h3>CAR IN LEVANT</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <a href="{{ route('customars') }}" style="align-items: center"
                            class="btn btn-outline-secondary  mb-4">

                            <div class="card-body">

                                <h3>User IN LEVANT</h3>
                            </div>
                        </a>
                    </div>


                    <div class="col-xl-3 col-md-6">
                        <a href="{{ route('get-car-offline') }}" style="align-items: center"
                            class="btn btn-outline-secondary  mb-4">

                            <div class="card-body">

                                <h3>Car OffLine</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <a href="{{ route('get-car-online') }}" style="align-items: center"
                            class="btn btn-outline-secondary  mb-4">

                            <div class="card-body">

                                <h3>Car OnLine</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <a href="{{ route('get-car-reservation') }}" style="align-items: center"
                            class="btn btn-outline-secondary  mb-4">

                            <div class="card-body">

                                <h3>Car Reservation</h3>
                            </div>
                        </a>
                    </div>

                    <div style="text-align: center" class="col-xl-3 col-md-6">

                        <button style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                            data-toggle="modal" data-target="#addcar">
                            <div class="card-body">

                                <h3>ADD NEW CAR</h3>
                            </div>
                        </button>



                    </div>
                    <div style="text-align: center" class="col-xl-3 col-md-6">

                        <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                            href="{{ route('getCurrentBook') }}">
                            <div class="card-body">

                                <h3>NEW BOOKS</h3>
                            </div>
                            <a>

                    </div>

                    <div style="text-align: center" class="col-xl-3 col-md-6">

                        <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                            href="{{ route('getAcceptBook') }}">
                            <div class="card-body">

                                <h3>Accepted BOOKS</h3>
                            </div>
                            <a>

                    </div>
                    <div style="text-align: center" class="col-xl-3 col-md-6">

                        <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                            href="{{ route('getFinishedBook') }}">
                            <div class="card-body">

                                <h3>Finished BOOKS</h3>
                            </div>
                            <a>

                    </div>




                    <!-- Modal -->
                    <div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div style="background-color: rgb(57, 57, 57)" class="modal-dialog" role="document">
                            <div style="background-color: rgb(57, 57, 57)" class="modal-content">
                                <div style="background-color: rgb(42, 41, 41)" class="modal-header">
                                    <h3 style="color: rgb(164, 21, 21)" class="modal-title" id="staticBackdropLabel">
                                        <strong>Enter New Car</strong> </h3>
                                    <button style="background-color: rgb(209, 23, 23)" type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div style="background-color: rgb(130, 130, 130)" class="modal-body">
                                    <form action="" id="addcars" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="car_brand" id="car_brand" class="form-control form-control-lg">
                                                <option disabled selected>Select Car Brand</option>
                                                @foreach ($brands as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->car_brand_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="car_model" id="car_model" class="form-control form-control-lg">
                                                <option disabled selected>Select Car Model</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="year" id="year" class="form-control form-control-lg">
                                                <option disabled selected>Select Year Of Car</option>
                                                @for ($i = 2025; $i > 1949; $i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="car_id" id="car_id" class="form-control form-control-lg">
                                                <option disabled selected>Select Car category</option>
                                                @foreach ($categorys as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->car_cat_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>




                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="car_fuel" id="car_id" class="form-control form-control-lg">
                                                <option disabled selected>Select Car Fuel</option>
                                                @foreach ($fuel as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->car_fuel_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                style="background-color: rgba(0, 0, 0, 0)" name="car_color"
                                                id="car_color" class="form-control form-control-lg">
                                                <option disabled selected>Select Color Of Car</option>


                                                <option style="color:red " value="Red">Red</option>
                                                <option style="color:Black " value="Black">Black</option>
                                                <option style="color:rgb(177, 177, 177) " value="White">White
                                                </option>
                                                <option style="color:Gray " value="Gray">Gray</option>
                                                <option style="color:Silver " value="Silver">Silver</option>
                                                <option style="color:Blue " value="Blue">Blue</option>
                                                <option style="color:Green " value="Green">Green</option>
                                                <option style="color:Gold " value="Gold">Gold</option>
                                                <option style="color:Brown " value="Brown">Brown</option>
                                                <option style="color:Orange " value="Orange">Orange</option>
                                                <option style="color:Yellow " value="Yellow">Yellow</option>

                                            </select>
                                        </div>


                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="num_door" id="num_door" class="form-control form-control-lg">
                                                <option disabled selected>Select Num Door</option>

                                                <option value="2">2</option>
                                                <option value="6">3</option>
                                                <option value="4">4</option>
                                                <option value="6">6</option>

                                            </select>
                                        </div>




                                        <div class="form-group">

                                            <select
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="type_gear" id="type_gear" class="form-control form-control-lg">
                                                <option disabled selected>Select Gear</option>

                                                <option value=0>Automatic</option>
                                                <option value=1>Manual</option>


                                            </select>
                                        </div>





                                        <div class="form-group">
                                            <label for="">
                                                <h4>Enter Car Description</h4>
                                            </label>
                                            <textarea
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                name="desc" id="desc" cols="20" rows="5" class="form-control form-control-lg"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="">
                                                <h4>Enter Main Car Image</h4>
                                            </label>
                                            <input
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                type="file" name="car_img" accept="image/*"
                                                class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <label for="">
                                                <h5> Enter pictures of the interior of the car </h5>
                                            </label>
                                            <input
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                type="file" name="images[]" accept="image/*"
                                                class="form-control form-control-lg" multiple>
                                        </div>

                                        <div class="form-group">
                                            <label for="">
                                                <h5>Enter Car Kilometers</h5>
                                            </label>
                                            <input
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                type="number" name="kilometer" id="kilometer"
                                                class="form-control form-control-lg">
                                        </div>


                                        <div class="form-group">
                                            <label for="">
                                                <h5>Enter Car Price In One Day</h5>
                                            </label>
                                            <input
                                                style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "
                                                type="number" name="price" id="price"
                                                class="form-control form-control-lg">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="edit-car" tabindex="-1" role="dialog"
                        aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="" id="editcars">
                                        @csrf
                                        <div id="car-form-data"></div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($car_comments)}}</h1>
                          <h3>Car Comments</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($comments)}}</h1>
                          <h3>Posts Comments</h3>
                        </div>
                    </div>
                </div> --}}


                </div>

                <div class="row">

                    {{-- <div class="col-xl-3 col-md-6">
                    <div style="align-items: center" class="card bg-primary text-white mb-4">
                       
                        <div class="card-body">
                            <h1>{{count($categorys)}}</h1>
                          <h3>  Car Category</h3>
                        </div>
                    </div>
                </div> --}}

                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($posts)}}</h1>
                          <h3>Posts</h3>
                        </div>
                    </div>
                </div> --}}

                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                       
                        <div class="card-body">
                            <h1>{{count($likes)}}</h1>
                          <h3> Likes</h3>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($car_comments)}}</h1>
                          <h3>Car Comments</h3>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($comments)}}</h1>
                          <h3>Posts Comments</h3>
                        </div>
                    </div>
                </div> --}}
                    {{-- <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                            <h1>{{count($car_books)}}</h1>
                          <h3>Book Car</h3>
                        </div>
                    </div>
                </div> --}}
                </div>
                {{-- <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-area mr-1"></i>
                          Customars
                        </div>
                        <div class="card-body">
                            <div id="get-customars"></div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('customars') }}">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar mr-1"></i>
                            Likes
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                   <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>Car Name</th>
                                        <th>Likes</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                       @forelse ($likes as $like)
                                       <tr>
                                        <td>{{$like->id}}</td>
                                        <td>{{$like->like_customar->username}}</td>
                                        <td>{{$like->like_car->car_name}}</td>
                                        <td>{{$like->like}}</td>
                                    </tr>
                                       @empty
                                      <h6>Record Not Found</h6>
                                       @endforelse
                                   </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('likes') }}">View More</a>
                               <h5>Total Like ( {{$sumlikes}} )</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                           Car Review
                        </div>
                        <div class="card-body">
                            <div class='table-responsive'>
                                <table class='table'>
                                   <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>Car Name</th>
                                        <th>Comments</th>
                                        <th>Reviews</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                       @forelse ($car_comments as $comment)
                                       <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->customars->username}}</td>
                                        <td>{{$comment->cars->car_name}}</td>
                                        <td>{{$comment->comment}}</td>
                                        <td>{{$comment->review}}</td>
                                    </tr>
                                       @empty
                                      <h6>Record Not Found</h6>
                                       @endforelse
                                   </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('review') }}">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                           Car Book
                        </div>
                        <div class="card-body">  
                            <div id="get-car-book"></div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('car-book') }}">View More</a>
                        </div>
                    </div>
                </div>
            </div> 
            {{-- <div class="row">
                <div class="col-xl-6 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                           Comments
                        </div>
                        <div class="card-body">
                            <div class='table-responsive'>
                                <table class='table'>
                                   <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>User Name</th>
                                        <th>Car Name</th>
                                        <th>Comments</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                       @forelse ($comments as $comment)
                                       <tr>
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->blog_customars->username}}</td>
                                        <td>{{$comment->posts->title}}</td>
                                        <td>{{$comment->comment}}</td>
                                    </tr>
                                       @empty
                                      <h6>Record Not Found</h6>
                                       @endforelse
                                   </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('comments') }}">View More</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        </main>
        @endif
        @if (Auth::user()->roll == 0)


            <ol class="breadcrumb mb-4">










                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>Books</h3>
                                <span class="counter-value">{{ count($car_books) }}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter pink">
                                <div class="counter-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <h3>Cars</h3>
                                <span class="counter-value">{{ count($cars) }}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <div class="counter-icon">
                                    <i class="fa fa-child"></i>
                                </div>
                                <h3>customer</h3>
                                <span class="counter-value">{{ count($customars) }}</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter pink">
                                <div class="counter-icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h3>Brand</h3>
                                <span class="counter-value">{{ count($brands) }}</span>
                            </div>
                        </div>
                    </div>
                </div>









            </ol>

            <div class="row">















                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('get-car-offline') }}" style="align-items: center"
                        class="btn btn-outline-secondary  mb-4">

                        <div class="card-body">

                            <h3>Car OffLine</h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('get-car-online') }}" style="align-items: center"
                        class="btn btn-outline-secondary  mb-4">

                        <div class="card-body">

                            <h3>Car OnLine</h3>
                        </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6">
                    <a href="{{ route('get-car-reservation') }}" style="align-items: center"
                        class="btn btn-outline-secondary  mb-4">

                        <div class="card-body">

                            <h3>Car Reservation</h3>
                        </div>
                    </a>
                </div>


                <div style="text-align: center" class="col-xl-3 col-md-6">

                    <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                        href="{{ route('getCurrentBook') }}">
                        <div class="card-body">

                            <h3>NEW BOOKS</h3>
                        </div>
                        <a>

                </div>

                <div style="text-align: center" class="col-xl-3 col-md-6">

                    <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                        href="{{ route('getAcceptBook') }}">
                        <div class="card-body">

                            <h3>Accepted BOOKS</h3>
                        </div>
                        <a>

                </div>
                <div style="text-align: center" class="col-xl-3 col-md-6">

                    <a style="align-items: center" type="button" class="btn btn-outline-secondary  mb-4"
                        href="{{ route('getFinishedBook') }}">
                        <div class="card-body">

                            <h3>Finished BOOKS</h3>
                        </div>
                        <a>

                </div>




                <!-- Modal -->
                <div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div style="background-color: rgb(57, 57, 57)" class="modal-dialog" role="document">
                        <div style="background-color: rgb(57, 57, 57)" class="modal-content">
                            <div style="background-color: rgb(42, 41, 41)" class="modal-header">
                                <h3 style="color: rgb(164, 21, 21)" class="modal-title" id="staticBackdropLabel">
                                    <strong>Enter New Car</strong> </h3>
                                <button style="background-color: rgb(209, 23, 23)" type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div style="background-color: rgb(130, 130, 130)" class="modal-body">
                                <form action="" id="addcars" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="car_brand" id="car_brand" class="form-control form-control-lg">
                                            <option disabled selected>Select Car Brand</option>
                                            @foreach ($brands as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->car_brand_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="car_model" id="car_model" class="form-control form-control-lg">
                                            <option disabled selected>Select Car Model</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="year" id="year" class="form-control form-control-lg">
                                            <option disabled selected>Select Year Of Car</option>
                                            @for ($i = 2025; $i > 1949; $i--)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="car_id" id="car_id" class="form-control form-control-lg">
                                            <option disabled selected>Select Car category</option>
                                            @foreach ($categorys as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->car_cat_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>




                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="car_fuel" id="car_id" class="form-control form-control-lg">
                                            <option disabled selected>Select Car Fuel</option>
                                            @foreach ($fuel as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->car_fuel_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            style="background-color: rgba(0, 0, 0, 0)" name="car_color"
                                            id="car_color" class="form-control form-control-lg">
                                            <option disabled selected>Select Color Of Car</option>


                                            <option style="color:red " value="Red">Red</option>
                                            <option style="color:Black " value="Black">Black</option>
                                            <option style="color:rgb(177, 177, 177) " value="White">White</option>
                                            <option style="color:Gray " value="Gray">Gray</option>
                                            <option style="color:Silver " value="Silver">Silver</option>
                                            <option style="color:Blue " value="Blue">Blue</option>
                                            <option style="color:Green " value="Green">Green</option>
                                            <option style="color:Gold " value="Gold">Gold</option>
                                            <option style="color:Brown " value="Brown">Brown</option>
                                            <option style="color:Orange " value="Orange">Orange</option>
                                            <option style="color:Yellow " value="Yellow">Yellow</option>

                                        </select>
                                    </div>


                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="num_door" id="num_door" class="form-control form-control-lg">
                                            <option disabled selected>Select Num Door</option>

                                            <option value="2">2</option>
                                            <option value="6">3</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>

                                        </select>
                                    </div>




                                    <div class="form-group">

                                        <select
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="type_gear" id="type_gear" class="form-control form-control-lg">
                                            <option disabled selected>Select Gear</option>

                                            <option value=0>Automatic</option>
                                            <option value=1>Manual</option>


                                        </select>
                                    </div>





                                    <div class="form-group">
                                        <label for="">
                                            <h4>Enter Car Description</h4>
                                        </label>
                                        <textarea
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            name="desc" id="desc" cols="20" rows="5" class="form-control form-control-lg"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">
                                            <h4>Enter Main Car Image</h4>
                                        </label>
                                        <input
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            type="file" name="car_img" accept="image/*"
                                            class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group">
                                        <label for="">
                                            <h5> Enter pictures of the interior of the car </h5>
                                        </label>
                                        <input
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            type="file" name="images[]" accept="image/*"
                                            class="form-control form-control-lg" multiple>
                                    </div>

                                    <div class="form-group">
                                        <label for="">
                                            <h5>Enter Car Kilometers</h5>
                                        </label>
                                        <input
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            type="number" name="kilometer" id="kilometer"
                                            class="form-control form-control-lg">
                                    </div>


                                    <div class="form-group">
                                        <label for="">
                                            <h5>Enter Car Price In One Day</h5>
                                        </label>
                                        <input
                                            style="border-radius: 15px;  border-width: 3px;
                                    border-style: solid;
                                    border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                    "
                                            type="number" name="price" id="price"
                                            class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit-car" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" id="editcars">
                                    @csrf
                                    <div id="car-form-data"></div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($car_comments)}}</h1>
                      <h3>Car Comments</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($comments)}}</h1>
                      <h3>Posts Comments</h3>
                    </div>
                </div>
            </div> --}}


            </div>

            <div class="row">

                {{-- <div class="col-xl-3 col-md-6">
                <div style="align-items: center" class="card bg-primary text-white mb-4">
                   
                    <div class="card-body">
                        <h1>{{count($categorys)}}</h1>
                      <h3>  Car Category</h3>
                    </div>
                </div>
            </div> --}}

                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($posts)}}</h1>
                      <h3>Posts</h3>
                    </div>
                </div>
            </div> --}}

                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                   
                    <div class="card-body">
                        <h1>{{count($likes)}}</h1>
                      <h3> Likes</h3>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($car_comments)}}</h1>
                      <h3>Car Comments</h3>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($comments)}}</h1>
                      <h3>Posts Comments</h3>
                    </div>
                </div>
            </div> --}}
                {{-- <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <h1>{{count($car_books)}}</h1>
                      <h3>Book Car</h3>
                    </div>
                </div>
            </div> --}}
            </div>
            {{-- <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-area mr-1"></i>
                      Customars
                    </div>
                    <div class="card-body">
                        <div id="get-customars"></div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('customars') }}">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Likes
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                               <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Car Name</th>
                                    <th>Likes</th>
                                </tr>
                               </thead>
                               <tbody>
                                   @forelse ($likes as $like)
                                   <tr>
                                    <td>{{$like->id}}</td>
                                    <td>{{$like->like_customar->username}}</td>
                                    <td>{{$like->like_car->car_name}}</td>
                                    <td>{{$like->like}}</td>
                                </tr>
                                   @empty
                                  <h6>Record Not Found</h6>
                                   @endforelse
                               </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('likes') }}">View More</a>
                           <h5>Total Like ( {{$sumlikes}} )</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Car Review
                    </div>
                    <div class="card-body">
                        <div class='table-responsive'>
                            <table class='table'>
                               <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Car Name</th>
                                    <th>Comments</th>
                                    <th>Reviews</th>
                                </tr>
                               </thead>
                               <tbody>
                                   @forelse ($car_comments as $comment)
                                   <tr>
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->customars->username}}</td>
                                    <td>{{$comment->cars->car_name}}</td>
                                    <td>{{$comment->comment}}</td>
                                    <td>{{$comment->review}}</td>
                                </tr>
                                   @empty
                                  <h6>Record Not Found</h6>
                                   @endforelse
                               </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('review') }}">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Car Book
                    </div>
                    <div class="card-body">  
                        <div id="get-car-book"></div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('car-book') }}">View More</a>
                    </div>
                </div>
            </div>
        </div> 
        {{-- <div class="row">
            <div class="col-xl-6 col-sm-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Comments
                    </div>
                    <div class="card-body">
                        <div class='table-responsive'>
                            <table class='table'>
                               <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>User Name</th>
                                    <th>Car Name</th>
                                    <th>Comments</th>
                                </tr>
                               </thead>
                               <tbody>
                                   @forelse ($comments as $comment)
                                   <tr>
                                    <td>{{$comment->id}}</td>
                                    <td>{{$comment->blog_customars->username}}</td>
                                    <td>{{$comment->posts->title}}</td>
                                    <td>{{$comment->comment}}</td>
                                </tr>
                                   @empty
                                  <h6>Record Not Found</h6>
                                   @endforelse
                               </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('comments') }}">View More</a>
                    </div>
                </div>
            </div>
        </div> --}}
            </div>
            </main>
        @endif
    </x-slot>
</x-app-layout>
