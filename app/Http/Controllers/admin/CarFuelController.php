<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarFuel;
use Illuminate\Support\Facades\File;

class CarFuelController extends Controller
{
    public function index()
    {
        return view("admin.car-fuel");
       
    }
    public function totalCount()
    {
        $output="";
        $total=CarFuel::all();
        $output .=count($total);
        echo $output;
    }

    public function loadDataFuel()
    {
        $output="";
        $fuel=CarFuel::orderBy("id","DESC")->get();
        if(count($fuel) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Fuel Id</th>
                            <th>Fuel Name</th>
                
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($fuel as $cat){
               
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_fuel_name."</td>
                            <td><button id='edit-btn-fuel' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editfuel'>Edit</button></td>
                            <td><button id='delete-btn-carFuel' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
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
        $fuel=CarFuel::orderBy("id","DESC")->where("car_fuel_name","like",$search)->get();
        if(count($fuel) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>fuel Id</th>
                            <th>fuel Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($fuel as $cat){
               
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_fuel_name."</td>
                            <td><button id='edit-btn-fuel' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editfuel'>Edit</button></td>
                            <td><button id='delete-btn-carFuel' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
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

        $fuel=new CarFuel();

        $cat_name=$request->car_fuel_name;
        $fuel->car_fuel_name=$cat_name;
        $results=$fuel->save();
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
        $fuel=CarFuel::find($id);
        $output .="<div class='form-group'>
                                <label for=''>Enter Type Fuel</label>
                                <input type='hidden' value='{$fuel->id}' name='edit_car_fuel_id'
                                    id='edit_car_fuel_id' class='form-control form-control-lg'>
                                     <input type='text' value='{$fuel->car_fuel_name}' name='edit_car_fuel_name'
                                    id='edit_car_fuel_name' class='form-control form-control-lg'>
                            </div>;
                          
                            </div>";
    echo $output;

    }

    public function update(Request $request)
    {
        $id=$request->edit_car_fuel_id;
        // echo $id;
        $fuel=CarFuel::find($id);
        // echo $fuel;
        $fuel->car_fuel_name=$request->edit_car_fuel_name;
        $result=$fuel->save();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        
    }

    public function delete(Request $request){
        $id=$request->id;
        $fuel=CarFuel::find($id);
        $result=$fuel->delete();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
    
}