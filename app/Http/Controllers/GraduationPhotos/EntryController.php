<?php

namespace App\Http\Controllers\GraduationPhotos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ModelsGraduationPhotos\Person;
use Barryvdh\DomPDF\Facade as PDF;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EntryController extends Controller
{
    public function generate(Person $person)
    {
        $qrCode = QrCode::format('png')
            ->size(100)
            ->generate($person->id);
        return base64_encode(
            PDF::loadView('PDF.graduation.entry', [
                //check default format
                'qrCode' => QrCode::format('png')->size(100)->generate($person->id),
                'name' => $person->name
            ])
                ->setPaper('c7')
                ->stream("Acceso-{$person->name}.pdf")
        );
    }
}
