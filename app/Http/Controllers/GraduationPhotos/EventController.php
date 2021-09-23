<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Event;
use App\Http\Requests\GraduationPhoto\EventRequest;

class EventController extends Controller
{
    public function index()
    {
        return Event::all();
    }

    public function show(Event $event)
    {
        return $event;
    }

    public function store(EventRequest $event)
    {
        //return $event->validated();
        return Event::create($event->validated());
    }
}
