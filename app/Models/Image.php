<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $table = 'images';
    protected $fillable = [
     'url', 'car_id'
    ];
    



    public function car()
    {
        return $this->belongsTo(Car::class,'car_id');
    }

}















