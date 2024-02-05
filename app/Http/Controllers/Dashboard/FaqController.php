<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $faqs = Faq::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $faqs->orderBy($sortBy, $sortDir);
        }

        return inertia('Dashboard/Faq/Index', [
            'faqs' => $faqs->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/Faq/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FaqRequest $request)
    {
        Faq::create($request->validated());

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        $faq->load('admin:id,name');
        return inertia('Dashboard/Faq/Edit', [
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $faq->delete();
        return response()->noContent();
    }
}
