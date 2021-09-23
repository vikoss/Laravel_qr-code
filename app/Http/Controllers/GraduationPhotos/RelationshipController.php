<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Relationship;
use App\Http\Requests\GraduationPhotos\RelationshipRequest;

class RelationshipController extends Controller
{
    public function index()
    {
        return Relationship::all();
    }

    public function store(RelationshipRequest $relationship)
    {
        return Relationship::create($relationship->validated());
    }

}
