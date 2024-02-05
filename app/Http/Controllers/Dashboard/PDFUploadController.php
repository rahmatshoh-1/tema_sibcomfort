<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PDFUploadController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->file('pdf_file')) {

            $file = $request->file('pdf_file')->store('catalog', ['disk' => 'public']);

            return response()->json([
                'file' => '/storage/' . $file,
            ]);
        }

        abort(401);
    }
}
