<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendCatalogRequest;
use App\Jobs\SendMailJob;
use App\Models\BuildType;
use App\Models\Category;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::with('buildType', 'category')
            ->where([
                'status' => 'active',
                'type'   => 'building'
            ]);

        if ($request->size_from) {
            $projects->where('size_from', '>=', $request->size_from);
        }

        if ($request->size_to) {
            $projects->where('size_to', '<=', $request->size_to);
        }

        if ($request->category_id) {
            $projects->where('category_id', $request->category_id);
        }

        if ($request->build_type_id) {
            $projects->where('build_type_id', $request->build_type_id);
        }

        if ($request->floor) {
            $projects->where('floor', $request->floor);
        }

        return Inertia::render('Catalog/Index', [
            'projects' => $projects->latest("created_at")->get(),
            'categories' => Category::where('other', false)->get(),
            'build_types' => BuildType::get(),
            'params' => $request->all(),
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }

    public function single($id)
    {
        $project = Project::with('buildType', 'category')
            ->where([
                'id' => $id,
                'status' => 'active'
            ])
            ->first();

        return Inertia::render('Catalog/Single', [
            'project' => $project,
            'sliders' => Slider::where([
                'status' => 'active',
                'page' => Route::currentRouteName(),
            ])->latest('created_at')->get(),
        ]);
    }

    public function sendCatalog(SendCatalogRequest $request)
    {
        SendMailJob::dispatch($request->name, $request->phone, $request->email, $request->type);

        return response()->noContent();
    }
}
