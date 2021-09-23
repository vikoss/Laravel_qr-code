<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\RelationshipTypes;

class RelationshipTypesController extends Controller
{
    public function index()
    {
        return RelationshipTypes::all();
    }
}
