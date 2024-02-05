<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        return Inertia::render('Post/Index', [
            'posts' => Post::where('status', 'active')->latest("created_at")->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
    public function single($slug)
    {
        $post = Post::where([
            'slug' => $slug,
            'status' => 'active'
        ])->firstOrFail();

        return Inertia::render('Post/Single', [
            'post' => $post,
            'randomPosts' => Post::where('status', 'active')
                ->whereNotIn('slug', [$slug])
                ->inRandomOrder()
                ->take(4)
                ->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
}
