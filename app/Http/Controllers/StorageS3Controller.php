<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\Http\Requests\ViewPDFRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class StorageS3Controller extends Controller
{
    public function storage(FileRequest $request)
    {
        if ($request->hasFile('file')) {
            return [
                'path' => Storage::disk("s3.{$request->bucket}")
                    ->putFile($request->path, $request->file('file'), $request->input('visibility', 'public')),
            ];
        }
        return response()->json(['message' => 'A file is required.'], 422);
    }

    public function show(FileRequest $request)
    {
        $bucket = "s3.{$request->bucket}";
        if (Storage::disk($bucket)->exists($request->path)) {
            return [
                'url' => Storage::disk($bucket)->url($request->path),
            ];
        }
        return response()->json(['message' => 'Not file found.'], 404);
    }
}
