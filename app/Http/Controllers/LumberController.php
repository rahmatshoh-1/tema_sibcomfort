<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LumberController extends Controller
{
    public function __invoke()
    {
        return inertia('Lumber', [
            'products' => Product::where([
                'status' => 'active',
                'type' => 'pogonazh',
            ])->latest("created_at")->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
            'faqs' => Faq::where([
                'page' => Route::currentRouteName(),
            ])->get(),
        ]);
    }
}
