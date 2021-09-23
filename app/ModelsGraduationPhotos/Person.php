<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $connection   = 'graduationPhotos';
    protected $fillable = ['name', 'first_surname', 'second_surname', 'phone', 'email', 'face_photo_path'];

    /*public function events()
    {
        return $this->hasMany(Event::class);
    }*/

    public function invitations()
    {
        return $this->hasMany(Invite::class, 'guest_id');
    }

    public function hosts()
    {
        return $this->hasMany(Host::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
