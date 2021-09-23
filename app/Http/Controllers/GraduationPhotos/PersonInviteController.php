<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhoto\InviteRequest;

class PersonInviteController extends Controller
{
    public function store(Person $person, InviteRequest $invite)
    {
        //return $invite->validated();
        return $person->invitations()->create($invite->validated());
    }
}
