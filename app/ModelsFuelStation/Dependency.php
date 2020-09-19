<?php

namespace App\ModelsFuelStation;

use Illuminate\Database\Eloquent\Model;

class Dependency extends Model
{
    protected $connection   = 'fuelStation';

    public function vehicle()
    {
        return $this->hasMany('App\ModelsFuelStation\Vehicle');
    }
}
