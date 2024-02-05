<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class ManualCuttingController extends Controller
{
    public function  __invoke()
    {
        return inertia('ManualCutting', [
            'projects' => Project::with('buildType', 'category')->where([
                'category_id'   => 4,
                'status'        => 'active',
                'type'          => 'building',
            ])->get(),
            'readyProjects' => Project::with('buildType', 'category')->where([
                'category_id'   => 4,
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
