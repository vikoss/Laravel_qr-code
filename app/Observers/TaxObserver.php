<?php

namespace App\Observers;
use App\Tax;
use Uuid;

class TaxObserver
{
    public function creating(Tax $tax)
    {
        $tax->uuid = Uuid::generate()->string;
    }
}
