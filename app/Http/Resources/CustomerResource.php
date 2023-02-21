<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
           'first_name' => $this->fname,
           'last_name' =>$this->lname,
           'phone' =>$this->phone,
           'email' => $this->email,
           'image' => $this->image,
       ];
    }
}
