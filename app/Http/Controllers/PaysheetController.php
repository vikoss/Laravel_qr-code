<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaySheetController extends Controller
{
    public function uploadFile() {
        //return request('file');
        //dd('hola');
        $path = request('file')->store('images', 's3');
        return $path;
    }
}
