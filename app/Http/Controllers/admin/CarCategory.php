<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarCategory as ModelCategory;
use Illuminate\Support\Facades\File;

class CarCategory extends Controller
{
    public function index()
    {
        return view("admin.car-category");
       
    }
    public function totalCount()
    {
        $output="";
        $total=ModelCategory::all();
        $output .=count($total);
        echo $output;
    }

    public function loadDataCategory()
    {
        $output="";
        $category=ModelCategory::orderBy("id","DESC")->get();
        if(count($category) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($category as $cat){
                $image=asset("upload/car-category/".$cat->car_image);
                // echo $image;
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_cat_name."</td>
                            <td><button id='edit-btn-category' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editcategory'>Edit</button></td>
                            <td><button id='delete-btn-carCategory' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
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
        $category=ModelCategory::orderBy("id","DESC")->where("car_cat_name","like",$search)->get();
        if(count($category) > 0){
       $output .=" <div class='table-responsive'>
                <table class='table table-bordered'>
                    <thead>
                        <tr>
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach($category as $cat){
                $image=asset("upload/car-category/".$cat->car_image);
                // echo $image;
                $output .="
                <tr>
                            <td>".$cat->id."</td>
                            <td>".$cat->car_cat_name."</td>
                            <td><img src='{$image}' alt='{$cat->car_cat_name}' style='width:50px;height:50px;'></td>
                            <td><button id='edit-btn-category' data-id='{$cat->id}' class='btn btn-success' data-toggle='modal' data-target='#editcategory'>Edit</button></td>
                            <td><button id='delete-btn-carCategory' data-id='{$cat->id}' class='btn btn-danger'>Delete</button></td>
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

        $category=new ModelCategory();

        $cat_name=$request->car_cat_name;


        $category->car_cat_name=$cat_name;
      
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
        $category=ModelCategory::find($id);

        
        $output .="<div class='form-group'>
                                <label for=''>Enter Category</label>
                                <input type='hidden' value='{$category->id}' name='edit_car_cat_id'
                                    id='edit_car_cat_id' class='form-control form-control-lg'>
                                     <input type='text' value='{$category->car_cat_name}' name='edit_car_cat_name'
                                    id='edit_car_cat_name' class='form-control form-control-lg'>
                            </div>
                           ";
    echo $output;

    }

    public function update(Request $request)
    {
        $id=$request->edit_car_cat_id;
        // echo $id;
        $category=ModelCategory::find($id);
        // echo $category;
        

        $category->car_cat_name=$request->edit_car_cat_name;
        $result=$category->save();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        
    }


    public function delete(Request $request){
        $id=$request->id;
        $category=ModelCategory::find($id);
       
        $result=$category->delete();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
    }
    
}