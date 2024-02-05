<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\BuildType;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $projects = Project::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $projects->orderBy($sortBy, $sortDir);
        } else {
            $projects->orderBy('created_at', 'desc');
        }

        return inertia('Dashboard/Project/Index', [
            'projects' => $projects->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/Project/Create', [
            'categories' => Category::where('other', false)->get(),
            'buildTypes' => BuildType::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $image_top = Helper::uploadFile($request->image_top);
        $image_middle = Helper::uploadFile($request->image_middle);
        $image_bottom = Helper::uploadFile($request->image_bottom);

        $data = $request->validated();
        $data = array_merge($data, ['image_top' => $image_top]);
        $data = array_merge($data, ['image_middle' => $image_middle]);
        $data = array_merge($data, ['image_bottom' => $image_bottom]);
        Project::create($data);

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::with('admin:id,name')->findOrFail($id);
        return inertia('Dashboard/Project/Edit', [
            'categories' => Category::where('other', false)->get(),
            'buildTypes' => BuildType::get(),
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id)
    {
        $project = Project::findOrFail($id);
        $project->load('admin:id,name');

        $data = $request->validated();

        if (str_starts_with($request->image_top, 'data')) {
            $image_top = Helper::uploadFile($request->image_top);
            $data = array_merge($data, ['image_top' => $image_top]);
        }

        if (str_starts_with($request->image_middle, 'data')) {
            $image_middle = Helper::uploadFile($request->image_middle);
            $data = array_merge($data, ['image_middle' => $image_middle]);
        }

        if (str_starts_with($request->image_bottom, 'data')) {
            $image_bottom = Helper::uploadFile($request->image_bottom);
            $data = array_merge($data, ['image_bottom' => $image_bottom]);
        }

        $project->update($data);

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $project = Project::findOrFail($id);
        $project->delete();
        return response()->noContent();
    }
}
