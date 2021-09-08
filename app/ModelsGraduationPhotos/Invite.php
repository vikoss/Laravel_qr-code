<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $connection   = 'graduationPhotos';

    public function guest()
    {
        return $this->belongsTo(Person::class);
    }

    public function relationship()
    {
        return $this->hasOne(Relationship::class);
    }
}
