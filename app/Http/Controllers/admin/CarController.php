<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarFuel;
use App\Models\CarCategory;
use App\Models\CarModel;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    public function index()
    {
        $brand = CarBrand::all();
        $fuel = CarFuel::all();
        $category = CarCategory::all();
        return view("admin.car", ["category" => $category, "brand" => $brand, "fuel" => $fuel]);
    }



    public function index1()
    {

        return view("button");
    }

    public function totalCount()
    {
        $output = "";
        $car = Car::all();
        echo $output .= count($car);
    }

    public function get()
    {
        if (Auth::user()->roll == 1) {
            $output = "";
            $car = Car::orderBy("id", "DESC")->get();
            if (count($car) > 0) {
                $output .= "
            <div class='table-responsve'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <td>Car id</td>
                            <td>Car Category</td>
                            <td>Car Brand</td>
                            <td>Type Of Fuel</td>
                            <td>Car model</td>
                            <td>Car Gear</td>
                           
                            <td>Car price</td>
                            
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
                foreach ($car as $cars) {
                    $image = asset("upload/cars/" . $cars->car_image);
                    $output .= "
                        <tr>
                            <td>{$cars->id}</td>
                            <td>{$cars->car_category->car_cat_name}</td>
                            <td>{$cars->car_brand->car_brand_name}</td>
                            <td>{$cars->car_fuel->car_fuel_name}</td>
                            <td>{$cars->car_model->car_model_name}</td>
                            <td>{$cars->type_gear}</td>
                           
                            <td>{$cars->car_price}</td>
                          
                            <td><button class='btn btn-success' data-id='{$cars->id}' id='car-edit-btn' data-toggle='modal' data-target='#edit-car'>Edit</button></td>
                            <td><button class='btn btn-danger' data-id='{$cars->id}' id='car-delete-btn'>Delete</button></td>
                        </tr>";
                }
                $output .= '
                </tbody>
                </table>
                </div>';
                echo $output;
            }
        } else {
            $output = "";
            $car = Car::orderBy("id", "DESC")->where("user_id", Auth::user()->id)->get();
            if (count($car) > 0) {
                $output .= "
                <div class='table-responsve'>
                    <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <td>Car id</td>
                                <td>Car color</td>
                                <td>Car Category</td>
                                <td>Car Brand</td>
                                <td>Type Of Fuel</td>
                                <td>Car image</td>
                                <td>Car price</td>
                               
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>";
                foreach ($car as $cars) {
                    $image = asset("upload/cars/" . $cars->car_image);
                    $output .= "
                            <tr>
                                <td>{$cars->id}</td>
                                <td>{$cars->car_color}</td>
                                <td>{$cars->car_category->car_cat_name}</td>
                                <td>{$cars->car_brand->car_brand_name}</td>
                                <td>{$cars->car_fuel->car_fuel_name}</td>
                                <td><img src='{$image}' style='width:50px;height=50px;' alt=''></td>
                                <td>{$cars->car_price}</td>
                                
                                <td><button class='btn btn-success' data-id='{$cars->id}' id='car-edit-btn' data-toggle='modal' data-target='#edit-car'>Edit</button></td>
                                <td><button class='btn btn-danger' data-id='{$cars->id}' id='car-delete-btn'>Delete</button></td>
                            </tr>";
                }
                $output .= '
                    </tbody>
                    </table>
                    </div>';
                echo $output;
            }
        }
    }

    public function search(Request $request)
    {
        $output = "";
        $search = "%" . $request->search . "%";
        $car = Car::orderBy("id", "DESC")->where("car_name", "like", $search)->get();
        if (count($car) > 0) {
            $output .= "
            <div class='table-responsve'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                        <td>Car id</td>
                        <td>Car Category</td>
                        <td>Car Brand</td>
                        <td>Type Of Fuel</td>
                        <td>Car Model</td>
                        <td>Car Gear</td>
                
                        <td>Car price</td>
                        
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($car as $cars) {
                $image = asset("upload/cars/" . $cars->car_image);
                $output .= "
                        <tr>
                        <td>{$cars->id}</td>
                        <td>{$cars->car_category->car_cat_name}</td>
                        <td>{$cars->car_brand->car_brand_name}</td>
                        <td>{$cars->car_fuel->car_fuel_name}</td>
                        <td>{$cars->car_model->car_model_name}</td>
                        <td>{$cars->type_gear}</td>
    
                        <td>{$cars->car_price}</td>
                  
                        <td><button class='btn btn-success' data-id='{$cars->id}' id='car-edit-btn' data-toggle='modal' data-target='#edit-car'>Edit</button></td>
                        <td><button class='btn btn-danger' data-id='{$cars->id}' id='car-delete-btn'>Delete</button></td>

                        </tr>";
            }
            $output .= '
                </tbody>
                </table>
                </div>';
            echo $output;
        }
    }
    public function create(Request $request)
    {

        $car = new Car();


        $image=$request->file("car_img");
        $new_image=rand().".".$image->extension();
        $image->move(public_path("upload/car"),$new_image);

        $car->car_cat_id = $request->car_id;
        $car->car_color = $request->car_color;
        $car->kilometer = $request->kilometer;
        $car->year = $request->year;
        $car->car_brand_id = $request->car_brand;
        $car->car_fuel_id = $request->car_fuel;
        $car->car_model_id = $request->car_model;
        $car->user_id = Auth::user()->id;
        // $car->car_name = $request->car_name;
        $car->num_door = $request->num_door;
        // $car->num_site = $request->num_site;
        $car->type_gear = $request->type_gear;
        $car->car_desc = $request->desc;
        $car->car_price = $request->price;
        $car->car_image = $new_image;
        $result = $car->save();






        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move('imageTest', $name);
                Image::insert([
                    'url' => 'imageTest/' . $name,
                    'car_id' => $car->id,
                ]);
            }
        }


        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function edit(Request $request)
    {
        $output = "";
        $id = $request->id;
        $category = CarCategory::all();
        
        $fuel = CarFuel::all();
        
        $car = Car::find($id);
        $image = asset("upload/cars/" . $car->car_image);
        // echo $image;
        $output .= "
                            


                            <div class='form-group'>
                          
                            <input type='hidden' value='{$id}' name='edit-car-id'>
                            <input type='text' value='{$car->car_brand->car_brand_name}'  class='form-control form-control-lg' disabled>";
                                
        $test = 0;
        if ($car->type_gear == "Manual")
            $test = 1;

        $output .= "</select>
                        </div>

                        <div class='form-group'>
                          
                            
                        <input type='text' value='{$car->car_model->car_model_name}'  class='form-control form-control-lg' disabled>";
                            
    

    $output .= "</select>
                    </div>

                    <div class='form-group'>
                          
                            
                        <input type='text' value='{$car->year}'  class='form-control form-control-lg' disabled>";
                            
    

    $output .= "</select>
                    </div>


                        <div class='form-group'>
                                <label for=''>Enter NEW Car Category</label>
                                <select name='edit_car_cat_id' id='edit_car_cat_id' class='form-control form-control-lg'>
                                    <option disabled selected>Select Car category</option>";
        foreach ($category as $cat) {
            if ($cat->id == $car->car_cat_id) {
                $select = "selected";
            } else {
                $select = "";
            }
            $output .= "<option {$select} value='{$cat->id}'>{$cat->car_cat_name}</option>";
        }
        $output .= "</select>
                            </div>

                        <div class='form-group'>
                        <label for=''><h4>Enter NEW Type Of Fuel</h4></label>
                        <select name='edit_car_fuel_id' id='edit_car_fuel_id' class='form-control form-control-lg'>
                            <option disabled selected>Select Car fuelegory</option>";
        foreach ($fuel as $cat) {
            if ($cat->id == $car->car_fuel_id) {
                $select = "selected";
            } else {
                $select = "";
            }
            $output .= "<option {$select} value='{$cat->id}'>{$cat->car_fuel_name}</option>";
        }
        $output .= "</select>
                    </div>


                    
                            <div class='form-group'>
                                <label  for=''><h4> Enter NEW num door</h4></label>
                                <select name='edit_door' id='edit_door' class='form-control form-control-lg'>
                                    <option disabled >Select num door</option>
                                    <option selected value='{$car->num_door}'>{$car->num_door}</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='6'>6</option>
                                   
                                </select>
                            </div>

                           

                            <div class='form-group'>
                                <label for=''><h4>Enter NEW Type Of Gear</h4></label>
                                <select name='edit_gear' id='edit_gear' class='form-control form-control-lg'>
                                    <option disabled >Select New Gear</option>
                                    <option selected value=$test>{$car->type_gear}</option>
                                    <option value=0>Automatic</option>
                                    <option value=1>Manual</option>
                                  
                                   
                                </select>
                            </div>


                        


                            <div class='form-group'>
                                <label for=''><h4>Enter New Car Description</h4></label>
                                <textarea name='edit_desc' id='edit_desc' cols='30' rows='10'
                                    class='form-control form-control-lg'>{$car->car_desc}</textarea>
                            </div>
                          
                            <div class='form-group'>
                                <label for=''><h4>Enter NEW CAR Price</h4></label>
                                <input type='text' value='{$car->car_price}' name='edit_price' id='edit_price' class='form-control form-control-lg'>
                            </div>";
        echo $output;
    }
    public function update(Request $request)
    {
    
    
        $car = Car::find($request['edit-car-id']);
       
        // if ($request->hasFile("new_car_img")) {
        //     $destination = public_path("upload\\cars\\" . $car->car_image);
        //     if (File::exists($destination)) {
        //         unlink($destination);
        //     }
        //     $image = $request->file("new_car_img");
        //     $new_image = rand() . "." . $image->extension();
        //     $image->move(public_path("upload/cars"), $new_image);
        //     $car->car_image = $new_image;
        // } else {
        //     $car->car_image = $request->old_car_img;
        // }
        
        $car->car_cat_id = $request['edit_car_cat_id'];
        $car->car_fuel_id = $request['edit_car_fuel_id'];
        $car->car_desc = $request['edit_desc'];
        $car->car_price = $request['edit_price'];
        $car->num_door = $request['edit_door'];
        $car->type_gear = $request['edit_gear'];
        $result = $car->save();
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }




    public function getOfflineCars()
    {

        $cars = Car::where('status', 0)->get();
        $Type = "Offline";
        return view("admin.statusCar", compact('cars', 'Type'));
    }


    public function getOnlineCars()
    {
        $cars = Car::where('status', 1)->get();
        $Type = "Online";
        return view("admin.statusCar", compact('cars', 'Type'));
    }

    public function getReservationCars()
    {
        $cars = Car::where('status', 2)->get();
        // $books = BookCar::where('status',1)->get();
     
        $Type = "Resevation";
        return view("admin.statusCar", compact('cars', 'Type'));
    }
    public function getALlCars()
    {
        $cars = Car::all();
        $images=Image::all();
        $Type = "";
        return view("admin.allcar", compact('cars', 'Type','images'));
    }


    public function changeStatusCar($id, Request $request)
    {
        $car = Car::find($id);
        $car->status = $request->status;
        $car->save();
        return redirect()->back();
    }


    public function delete(Request $request)
    {
        $id = $request->id;
        $car = Car::find($id);
        $images = public_path("upload\\cars\\" . $car->car_image);
        if (File::exists($images)) {
            unlink($images);
        }
        $result = $car->delete();
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }
    }
}