<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarBrand extends Model
{
    use HasFactory;
    protected $table="car_brands";
    protected $fillable=[
        'car_brand_name',
        'car_image',
    ];

    
    public function cars(){
        return $this->hasMany(Car::class);
    }

    

    public function cars_model(){
        return $this->hasMany(CarModel::class,'car_brand_id');
    }


}