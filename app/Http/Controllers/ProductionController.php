<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ProductionController extends Controller
{
    public function __invoke()
    {

        return Inertia::render('Production', [
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
}
