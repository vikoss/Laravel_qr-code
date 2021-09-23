<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\TypesEvents;
use App\ModelsGraduationPhotos\TypesRelationships;
use App\Services\ZipCode;

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

    public function zipcode(Request $request, $code)
    {
        return ZipCode::get($code);
    }
}
