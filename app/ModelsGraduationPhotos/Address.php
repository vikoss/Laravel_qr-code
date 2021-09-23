<?php

namespace App\ModelsGraduationPhotos;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $connection   = 'graduationPhotos';
    protected $fillable = ['street', 'colony', 'city', 'state_code', 'town', 'cp', 'person_id'];

    public function person()
    {
        return $this->belongsTo(Person::class);
    }
}
