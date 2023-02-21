<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'car_category' => $this->car_category->car_cat_name,
            'car_brand' => $this->car_brand->car_brand_name,
            'car_brand_image' => URL("upload/car-category/".$this->car_brand->car_image),
            'car_model' => $this->car_model->car_model_name,
            'car_fuel' => $this->car_fuel->car_fuel_name,
            'car_color' => $this->car_color,
            'car_description' =>$this->car_desc,
            'car_image' => $this->car_image,
            'car_price' => $this->car_price,
            'type_gear' => $this->type_gear,
            'status' => $this->status,
        ];
    }
}
