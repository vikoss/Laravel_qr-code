<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $connection   = 'graduationPhotos';
    protected $fillable = ['name', 'date_time'];

    public function hosts()
    {
        return $this->hasMany(Host::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invite::class);
    }
}
