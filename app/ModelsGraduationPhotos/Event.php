<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $connection   = 'graduationPhotos';

    public function host()
    {
        return $this->belongsTo(Person::class);
    }
}
