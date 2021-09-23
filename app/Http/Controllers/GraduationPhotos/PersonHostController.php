<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Host;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhoto\HostRequest;

class PersonHostController extends Controller
{
    public function store(Person $person, HostRequest $host)
    {
        return $person->hosts()->create($host->validated());
    }
}
