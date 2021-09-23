<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ZipCode
{
    public static function get(string $code)
    {
        return Http::get(env('ZIP_CODE_API')."/{$code}")->json();
    }
}
