<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\TypesEvents;
use App\ModelsGraduationPhotos\TypesRelationships;

class CatalogsController extends Controller
{
    public function events()
    {
        return TypesEvents::all();
    }

    public function relationships()
    {
        return TypesRelationships::all();
    }
}
