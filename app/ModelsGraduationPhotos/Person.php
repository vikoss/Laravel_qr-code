<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $connection   = 'graduationPhotos';

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invite::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
