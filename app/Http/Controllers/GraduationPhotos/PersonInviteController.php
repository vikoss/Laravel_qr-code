<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhotos\InviteRequest;

class PersonInviteController extends Controller
{
    public function store(Person $person, InviteRequest $invite)
    {
        $person->invitations()->create($invite->validated());
    }
}
