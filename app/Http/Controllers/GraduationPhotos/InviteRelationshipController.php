<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Invite;
use App\Http\Requests\GraduationPhotos\RelationshipRequest;

class InviteRelationshipController extends Controller
{
    public function store(Invite $invite, RelationshipRequest $relationship)
    {
        $invite->relationship()->create($relationship->validated());
    }
}
