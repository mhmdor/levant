<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookCarResource extends JsonResource
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
            'id' => $this->id,
            'car_id' => $this->car_id,
            'customer_id' => $this->customar_id,
            'start_book' => $this->start_book,
            'end_book' => $this->end_book,
            'days' => $this->days,
        ];
    }
}
