<?php

namespace App\ModelsFuelStation;

use Illuminate\Database\Eloquent\Model;

class Refill extends Model
{
    protected $connection   = 'fuelStation';
    protected $guarded = ['id'];

    public function vehicle()
    {
        return $this->belongsTo('App\ModelsFuelStation\Vehicle', 'vehicle_uuid');
    }
}
