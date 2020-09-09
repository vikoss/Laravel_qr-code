<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refill extends Model
{
    protected $connection   = 'fuelStation';
    protected $fillable     = ['*'];
}
