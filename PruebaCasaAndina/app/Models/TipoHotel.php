<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoHotel extends Model
{
    protected $table = 'apyn_tipo_hotel';
    
    protected $primaryKey = 'tht_id';

    protected $createdAt = 'tht_cdate';
    protected $updatedAt = 'tht_mdate';

}
