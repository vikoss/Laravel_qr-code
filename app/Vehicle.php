<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $connection   = 'fuelStation';
    protected $fillable     = ['*'];
}
