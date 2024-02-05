<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Project;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;

class FrameHouseController extends Controller
{
    public function __invoke()
    {
        $projects = Project::with('buildType', 'category')
            ->where([
                'category_id'   => 1,
                'status'        => 'active',
                'type'          => 'ready',
            ]);

        return inertia('FrameHouse', [
            'projects' => $projects->latest("created_at")->get(),
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
