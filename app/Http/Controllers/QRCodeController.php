<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(Request $request)
    {
        return base64_encode(
            QrCode::format($request->input('format', 'png'))
                ->size($request->input('size', 100))
                ->generate($request->input('text', 'Hello World!'))
        );
    }
}
