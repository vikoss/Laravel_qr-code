<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\RelationshipRequest;
use App\Http\Requests\GraduationPhotos\Relationship;

class RelationshipController extends Controller
{
    public function store(RelationshipRequest $relationship)
    {
        return Relationship::create($relationship->validated());
    }
}
