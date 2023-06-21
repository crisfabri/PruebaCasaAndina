<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoHotelResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'tht_id' => $this->tht_id,
            'tht_tit' => $this->tht_tit,
        ];
    }
}
