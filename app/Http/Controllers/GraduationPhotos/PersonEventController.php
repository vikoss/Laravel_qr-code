<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Person;
use App\ModelsGraduationPhotos\Event;
use App\Http\Requests\GraduationPhoto\EventRequest;

class PersonEventController extends Controller
{
    public function store(Person $person, Request $request)
    {
        return $person->events()->save(Event::find($request->id));
    }
}
