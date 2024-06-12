<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Challange extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "distance_km" => $this->distance_km,
            "distance_ml" => $this->distance_ml,
            "virtual_postcards" => $this->virtual_postcards,
            "has_street_view"=> $this->has_street_view,
            "wallpaper" => $this->wallpaper,
            "image"=> $this->image,
            "added"=>$this->added,
            "completed"=>$this->completed,
        ];
    }
}
