<x-app-layout>
    <x-slot name="title">Car</x-slot>

    <x-slot name="content">
        <div class="container my-5">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4>Car ( <span id="total-car"></span> )</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcar">
                            Add Car
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3">
            <input type="text" name="search" id="search" placeholder="Search Here..."
                class="form-control form-control-lg w-50 m-auto">
        </div>
        <div class="container">
            <div id="car-table"></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                    aria-hidden="true">
                    <div style="background-color: rgb(57, 57, 57)" class="modal-dialog" role="document">
                        <div style="background-color: rgb(57, 57, 57)" class="modal-content">
                            <div style="background-color: rgb(42, 41, 41)" class="modal-header">
                                <h3 style="color: rgb(164, 21, 21)" class="modal-title" id="staticBackdropLabel"><strong>Enter New  Information Car</strong> </h3>
                                <button style="background-color: rgb(209, 23, 23)" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           
                            <div style="background-color: rgb(130, 130, 130)" class="modal-body">
                                <form action="" id="addcars" enctype="multipart/form-data">
                                    @csrf
                                   
                                    <div class="form-group">
                                       
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="car_brand" id="car_brand" class="form-control form-control-lg" >
                                            <option  disabled selected>Select Car Brand</option>
                                            @foreach ($brand as $cat)
                                            <option value="{{$cat->id}}">{{$cat->car_brand_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
        
                                    <div class="form-group">
                                      
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="car_model" id="car_model" class="form-control form-control-lg">
                                            <option disabled selected>Select Car Model</option>
                                           
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        "  name="year" id="year" class="form-control form-control-lg">
                                            <option disabled selected>Select Year Of Car</option>
                                            @for ($i = 2025; $i >1949; $i--)
                                            <option value="{{$i}}">{{$i}}</option> 
                                            @endfor

                                        </select>
                                    </div>
                                    <div class="form-group">
                                       
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="car_id" id="car_id" class="form-control form-control-lg">
                                            <option disabled selected>Select Car category</option>
                                            @foreach ($category as $cat)
                                            <option value="{{$cat->id}}">{{$cat->car_cat_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                
        
        
                                    <div class="form-group">
                                       
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="car_fuel" id="car_id" class="form-control form-control-lg">
                                            <option disabled selected>Select Car Fuel</option>
                                            @foreach ($fuel as $cat)
                                            <option value="{{$cat->id}}">{{$cat->car_fuel_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                             
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " style="background-color: rgba(0, 0, 0, 0)" name="car_color" id="car_color" class="form-control form-control-lg">
                                            <option disabled selected>Select Color Of Car</option>
                                            
                                            
                                    <option style="color:red " value="Red">Red</option>
                                    <option style="color:Black "  value="Black">Black</option>
                                    <option style="color:rgb(177, 177, 177) "  value="White">White</option>
                                    <option style="color:Gray "  value="Gray">Gray</option>
                                    <option style="color:Silver "  value="Silver">Silver</option>
                                    <option style="color:Blue "  value="Blue">Blue</option>
                                    <option style="color:Green "  value="Green">Green</option>
                                    <option style="color:Gold "  value="Gold">Gold</option>
                                    <option style="color:Brown "  value="Brown">Brown</option>
                                    <option style="color:Orange "  value="Orange">Orange</option>
                                    <option style="color:Yellow "  value="Yellow">Yellow</option>
                                            
                                        </select>
                                    </div>
        
        
                                    <div class="form-group">
                                     
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="num_door" id="num_door" class="form-control form-control-lg">
                                            <option disabled selected>Select Num Door</option>
                                            
                                            <option value="2">2</option>
                                            <option value="6">3</option>
                                            <option value="4">4</option>
                                            <option value="6">6</option>
                                            
                                        </select>
                                    </div>
        
        
                    
        
                                    <div class="form-group">
                                   
                                        <select style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="type_gear" id="type_gear" class="form-control form-control-lg">
                                            <option disabled selected>Select Gear</option>
                                            
                                            <option value=0>Automatic</option>
                                            <option value=1>Manual</option>
                                            
                                            
                                        </select>
                                    </div>
                                    

                                    
                                    
        
                                    <div class="form-group">
                                        <label  for=""> <h4>Enter Car Description</h4></label>
                                        <textarea style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " name="desc" id="desc" cols="20" rows="5"
                                            class="form-control form-control-lg"></textarea>
                                    </div>
        
                                    <div class="form-group">
                                        <label for=""><h4>Enter Main Car Image</h4> </label>
                                        <input style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " type="file" name="car_img" accept="image/*" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group">
                                        <label for=""><h5> Enter pictures of the interior of the car </h5></label>
                                        <input style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " type="file" name="images[]" accept="image/*" class="form-control form-control-lg" multiple>
                                    </div>
        
                                    <div class="form-group">
                                        <label for=""><h5>Enter Car Kilometers</h5> </label>
                                        <input style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " type="number" name="kilometer" id="kilometer" class="form-control form-control-lg">
                                    </div>
        
        
                                    <div class="form-group">
                                        <label for=""><h5>Enter Car Price In One Day</h5> </label>
                                        <input style="border-radius: 15px;  border-width: 3px;
                                        border-style: solid;
                                        border-color: #151515; color: rgb(0, 0, 0);font-size: 23px; , 
                                        " type="number" name="price" id="price" class="form-control form-control-lg">
                                    </div>
                                    <div class="form-group">
                                        <button  type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </x-slot>
</x-app-layout>

