<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarCategory;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
   public function index(){
       $car=Car::where("status",1)->orderBy("id","DESC")->get();
        $category=CarCategory::all();
        $brand=CarBrand::all();

       return view("customar.allCar",["cars"=>$car,"category"=>$category,"brand"=>$brand]);
   }

   public function detail($id){
       $car=Car::find($id);
      $images=Image::where("car_id", $id)->get();
    return view("customar.details",["cars"=>$car,"images"=>$images]);
   }




   
   public function image($id){
  $car=Car::find($id);
  $images=Image::where("car_id", $id)->get();
    return view("imagecar",compact('images','car'));
}


public function delete($id){
 $image=Image::find($id)->url;
    $images = public_path($image);
    if (File::exists($images)) {
        unlink($images);
    }
    
   $delete=  Image::where('id', $id)->delete();
   if ($delete) {
    return redirect()->back()->with('message', 'Image Was Deleted');

} else {
    echo 0;
}

  }






public function createimage(Request $request){
    $files = $request->file('images');
        foreach ($files as $file) {
            $name = $file->hashName();
            $file->move('imageTest', $name);
            Image::insert([
                'url' => 'imageTest/' . $name,
                'car_id' => $request->id,
            ]);
        }
        return redirect()->back()->with('message1', 'Image Was Added');
    }
   
}



