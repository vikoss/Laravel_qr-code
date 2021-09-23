<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    protected $connection   = 'graduationPhotos';
    protected $fillable = ['event_id', 'person_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invite::class);
    }
}
