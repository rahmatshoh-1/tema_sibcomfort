<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use Inertia\Inertia;

class TimberController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Contact', [
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
}
