<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Helper\Helper;
use App\Http\Requests\ReviewRequest;

class ReviewsController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $reviews->orderBy($sortBy, $sortDir);
        } else {
            $reviews->orderBy('created_at', 'desc');
        }

        return inertia('Dashboard/Reviews/Index', [
            'reviews' => $reviews->paginate(),
        ]);
    }
    public function create()
    {
        return Inertia::render('Dashboard/Reviews/Create', [
            'reviews' => Review::get()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(ReviewRequest $request)
    {
        $image = Helper::uploadFile($request->image);

        $data = $request->validated();
        $data = array_merge($data, ['image' => $image]);
        Review::create($data);

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
        $review = Review::findOrFail($id);
        $review->load('admin:id,name');

        return Inertia::render('Dashboard/Reviews/Edit', [
            'review' => $review,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReviewRequest $request, string $id)
    {
        $review = Review::findOrFail($id);
        $data = $request->validated();

        if (str_starts_with($request->image, 'data')) {
            $image = Helper::uploadFile($request->image);
            $data = array_merge($data, ['image' => $image]);
        }

        $review->update($data);

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

        $review = Review::findOrFail($id);
        $review->delete();
        return response()->noContent();
    }
}
