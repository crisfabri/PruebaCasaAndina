<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'htl_tit' => $this->htl_tit,
            'htl_img' => $this->htl_img,
            'htl_id' => $this->htl_id,
            'tipoHotel' => new TipoHotelResource($this->whenLoaded('tipoHotel')),
        ];
    }
}

