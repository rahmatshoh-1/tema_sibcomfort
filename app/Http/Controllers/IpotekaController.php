<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class IpotekaController extends Controller
{

    public function __invoke()
    {
        return Inertia::render('Ipoteka',[
            'projects' => Project::with('buildType', 'category')
            ->where([
                'status' => 'active',
                'type'   => 'building',
            ])->latest("created_at")->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
}
