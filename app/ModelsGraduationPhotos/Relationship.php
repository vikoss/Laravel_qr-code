<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $connection   = 'graduationPhotos';

    public function invite()
    {
        return $this->belongsTo(Invite::class);
    }
}
