<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table="cars";
    protected $fillable=[
        "user_id",
        "car_cat_id",
        "car_brand_id",
        "car_model_id",
        "car_color",
        "kilometer",
        "car_desc",
        "car_image",
        "car_price",
        "num_door",
        "year",
        "type_gear",

    ];


    



     

  


    public function users(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function car_category(){
        return $this->belongsTo(CarCategory::class,"car_cat_id");
    }
    public function car_fuel(){
        return $this->belongsTo(CarFuel::class,"car_fuel_id");
    }

    public function car_brand(){
        return $this->belongsTo(CarBrand::class,"car_brand_id");
    }

    public function car_model(){
        return $this->belongsTo(CarModel::class,"car_model_id");
    }

    public function comments(){
        return $this->hasMany(CarComment::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }


    public function getTypeGearAttribute($value)
    {

        return ($value==0)?"Automatic":"Manual";
    }

    public function books()
    {
        return $this->hasMany(BookCar::class);
    }



    public function images()
    {
        return $this->hasMany(Image::class,'car_id');
    }

 

}