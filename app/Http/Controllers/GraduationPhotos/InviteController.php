<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Event;
use App\ModelsGraduationPhotos\Person;

class InviteController extends Controller
{
    public function generateURL(Person $person, Event $event)
    {
        return [
            'url' => url("foto-de-graduacion/{$event->id}/{$person->id}/invitacion")
        ];
    }
}
