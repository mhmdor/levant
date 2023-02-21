<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookCar;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
   

    public function show($id)
    {
        $carModel = CarModel::find($id);
        return $carModel->cars;
    }

    public function index()
    {
        $brand=CarBrand::all();
        return view("admin.car-model",compact('brand'));
       
    }
    public function totalCount()
    {
        $output="";
        $total=Carmodel::all();
        $output .=count($total);
        echo $output;
    }

    

    public function loadDataModel()
    {
        $output="";
        $category=Carmodel::orderBy("id","DESC")->get();
        if(count($category) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Model Id</th>
                            <th>Model Name</th>
                            <th>His Brand</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($category as $cat){
               
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_model_name."</td>
                            <td>{$cat->brand->car_brand_name}</td>
                            <td><button id='edit-btn-model' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editmodel'>Edit</button></td>
                            <td><button id='delete-btn-carModel' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
                </tr>
                ";
            }
                  $output .="</tbody>
                            </table>
                        </div>";
        echo $output;

        }else{
            echo "<h1>Data not found</h1>";
        }
    }
     public function searchData(Request $request)
    {
        $output="";
        $search='%'.$request->search.'%';
        $category=CarModel::orderBy("id","DESC")->where("car_model_name","like",$search)->get();
        if(count($category) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Model Id</th>
                            <th>Model Name</th>
                            <th>His Brand</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($category as $cat){
               
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_model_name."</td>
                            
                            <td><button id='edit-btn-model' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editmodel'>Edit</button></td>
                            <td><button id='delete-btn-carModel' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
                </tr>
                ";
            }
                  $output .="</tbody>
                            </table>
                        </div>";
        echo $output;

        }else{
            echo "<h1>Data not found</h1>";
        }
    }
    public function create(Request $request){

        $category=new CarModel();
        $category->car_brand_id = $request->car_id;
        $cat_name=$request->car_model_name;
        $category->car_model_name=$cat_name;
        
        $results=$category->save();
        if($results){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function edit(Request $request)
    {
        $id=$request->id;
        $output="";
        $category=CarModel::find($id);
        $brand = CarBrand::all();
       
       
        $output .="<div class='form-group'>
                                <label for=''>Enter Category</label>
                                <input type='hidden' value='{$category->id}' name='edit_car_model_id'
                                    id='edit_car_model_id' class='form-control form-control-lg'>
                                     <input type='text' value='{$category->car_model_name}' name='edit_car_model_name'
                                    id='edit_car_model_name' class='form-control form-control-lg'>
                            </div>
                            <div class='form-group'>
                            <label for=''>Enter Car Brand</label>
                            <select name='edit_car_brand_id' id='edit_car_brand_id' class='form-control form-control-lg'>
                                <option disabled selected>Select Car brand</option>";
    foreach ($brand as $bra) {
        if ($bra->id == $category->car_brand_id) {
            $select = "selected";
        } else {
            $select = "";
        }
        $output .= "<option {$select} value='{$bra->id}'>{$bra->car_brand_name}</option>";
    }

    $output .= "</select>
                        </div>";
    echo $output;

    }

    public function update(Request $request)
    {
        $id=$request->edit_car_model_id;
        
       
        $category=CarModel::find($id);
        
        
        $category->car_brand_id = $request->car_id;  
         
        $category->car_model_name=$request->edit_car_model_name;

        $result=$category->save();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        
    }

    public function getModelById($id)
    {
        $brand = CarBrand::find($id);
        $carsmodel = $brand->cars_model;
        return $carsmodel; 

    }


    public function delete(Request $request){
        $id=$request->id;
        $category=CarModel::find($id);
        
        $result=$category->delete();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }

}
