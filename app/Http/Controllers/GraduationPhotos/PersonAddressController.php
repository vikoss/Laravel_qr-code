<?php

namespace App\Http\Controllers\GraduationPhotos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelsGraduationPhotos\Person;
use App\Http\Requests\GraduationPhoto\AddressRequest;

class PersonAddressController extends Controller
{
    public function store(Person $person, AddressRequest $address)
    {
        $person->address()->create($address->validated());
    }
}
