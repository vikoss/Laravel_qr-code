<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhotos\EventRequest;

class PersonEventController extends Controller
{
    public function store(Person $person, EventRequest $event)
    {
        $person->events()->create($event->validated());
    }
}
