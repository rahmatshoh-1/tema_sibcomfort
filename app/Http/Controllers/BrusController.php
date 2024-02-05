<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BrusController extends Controller
{
    public function __invoke()
    {
        return inertia('Brus', [
            'projects' => Project::where([
                'category_id'   => 2,
                'status'        => 'active',
                'type'          => 'building',
            ])->get(),
            'readyProjects' => Project::where([
                'category_id'   => 2,
                'status'        => 'active',
                'type'          => 'ready',
            ])->get(),
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
