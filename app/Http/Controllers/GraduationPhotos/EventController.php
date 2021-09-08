<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Event;

class EventController extends Controller
{
    public function show(Event $event)
    {
        return $event;
    }
}
