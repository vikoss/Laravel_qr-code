<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $connection   = 'graduationPhotos';

    public function invitations()
    {
        return $this->hasMany(Invite::class);
    }
}
