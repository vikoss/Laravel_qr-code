<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhotos\PersonRequest;

class PersonController extends Controller
{
    public function store(PersonRequest $person)
    {
        return Person::create($person->validated());
    }
}
