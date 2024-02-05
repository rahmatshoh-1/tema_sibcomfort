<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ReadyProjectController extends Controller
{
    public function __invoke()
    {
        $categories = Category:: where('other', false)-> get();
         $cid = request()->has('cid') ? request('cid') : $categories[0]->id;
    

        $projects = Project::with('buildType', 'category')
            ->where([
                'status' => 'active',
                'type'   => 'ready'
            ])->where('category_id', $cid);

        return Inertia::render('ReadyProject', [
            'categories' => $categories,
            'cid' => $cid,
            'projects' => $projects->latest("created_at")->get(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }
}
