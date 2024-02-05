<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Review;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function __invoke()
    {

        return Inertia::render('Home', [
            'reviews' => Review::latest('created_at')->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
            'projects' => Project::where('status', 'active')->latest('created_at')->take(9)->get(),
            'posts' => Post::with('category')->where('status', 'active')
                ->inRandomOrder()
                ->take(5)
                ->get(),
        ]);
    }
}
