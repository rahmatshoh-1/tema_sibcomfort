<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class EditorUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->file('upload')) {
            $fileName = $request->file('upload')->getClientOriginalName();

            $file = $request->file('upload')->store('posts', ['disk' => 'public']);

            return response()->json([
                'fileName' => $fileName,
                'uploaded' => 1,
                'url' => URL::to('/') . "/storage/" . $file
            ]);
        }
    }
}
