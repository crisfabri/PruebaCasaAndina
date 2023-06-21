<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoHotel;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hotel extends Model
{
    protected $table = 'apyn_hotel';
    protected $primaryKey = 'htl_id';

    protected $fillable = ['htl_tit', 'htl_img'];
    protected $createdAt = 'htl_cdate';
    protected $updatedAt = 'htl_mdate';
    
    public function tipoHotel(): HasOne
    {
        return $this->hasOne(TipoHotel::class, 'tht_id');
    }
}
