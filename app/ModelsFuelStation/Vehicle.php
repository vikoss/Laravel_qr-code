<?php

namespace App\ModelsFuelStation;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $connection   = 'fuelStation';
    protected $fillable     = ['*'];


    public function refills()
    {
        return $this->hasMany('App\ModelsFuelStation\Refill', 'vehicle_uuid', 'uuid');
    }

    public function dependency()
    {
        return $this->belongsTo('App\ModelsFuelStation\Dependency');
    }

    public function lastRefill()
    {
        return $this->hasOne('App\ModelsFuelStation\Refill', 'vehicle_uuid', 'uuid')->latest();
    }
    public function getBitacora($dates)
    {
        return "Hello";
        return $this->refills()->whereBetween('created_at',[$start,$end])->get();
    }
}
