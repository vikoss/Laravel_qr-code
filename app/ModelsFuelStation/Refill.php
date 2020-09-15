<?php

namespace App\ModelsFuelStation;

use Illuminate\Database\Eloquent\Model;

class Refill extends Model
{
    protected $connection   = 'fuelStation';
    protected $fillable     = ['*'];
}
