<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarFuel extends Model
{
    use HasFactory;
    protected $table="car_fuels";
    protected $fillable=[
        'car_fuel_name',
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}