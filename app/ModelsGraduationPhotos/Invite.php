<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $connection   = 'graduationPhotos';
    protected $fillable = ['event_id', 'host_id', 'guest_id', 'relationship_id'];

    public function guest()
    {
        return $this->belongsTo(Person::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function host()
    {
        return $this->belongsTo(Host::class);
    }

    public function relationship()
    {
        return $this->belongsTo(Relationship::class);
    }
}
