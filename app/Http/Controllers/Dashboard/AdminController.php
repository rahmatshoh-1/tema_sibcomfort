<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\AdminEditRequest;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $admins = Admin::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $admins->orderBy($sortBy, $sortDir);
        } else {
            $admins->orderBy('created_at', 'desc');
        }

        return Inertia::render('Dashboard/Admin/Index', [
            'admins' => $admins->paginate(15),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }
        return Inertia::render('Dashboard/Admin/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        Admin::create($request->validated());

        return response()->json('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $admin->load('admin:id,name');

        return Inertia::render('Dashboard/Admin/Edit', [
            "admin" => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminEditRequest $request, Admin $admin)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $admin->update($request->validated());

        return response()->json('success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $admin->delete();
        return response()->json('success');
    }
}
