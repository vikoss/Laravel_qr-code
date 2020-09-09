<?php

namespace App\Observers;

use Uuid;
use App\Vehicle;

class VehicleObserver
{
    public function creating(Vehicle $Vehicle)
    {
    	$Vehicle->uuid = Uuid::generate()->string;
    }
}
