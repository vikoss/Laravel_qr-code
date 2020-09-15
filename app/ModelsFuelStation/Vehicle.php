<?php

namespace App\ModelsFuelStation;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $connection   = 'fuelStation';
    protected $fillable     = ['*'];
}
