<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        if ($this->resource != null){
            return [
                'id'=>$this->resource->id,
                'name'=>$this->resource->name,
                'price'=>$this->resource->price,
                'photo'=>$this->resource->photos
            ];
        } else {
            return [];
        }
    }
}
