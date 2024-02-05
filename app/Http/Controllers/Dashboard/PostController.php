<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $posts = Post::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $posts->orderBy($sortBy, $sortDir);
        } else {
            $posts->orderBy('created_at', 'desc');
        }

        return Inertia::render('Dashboard/Post/Index', [
            'posts' => $posts->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Dashboard/Post/Create', [
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $image = Helper::uploadFile($request->image);

        $data = $request->validated();
        $data = array_merge($data, ['image' => $image]);
        Post::create($data + ["admin_id" => auth()->user()->id]);
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
        $post = Post::with("admin:id,name")->findOrFail($id);
        return Inertia::render('Dashboard/Post/Edit', [
            'categories' => Category::get(),
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->validated();

        if (str_starts_with($request->image, 'data')) {
            $image = Helper::uploadFile($request->image);
            $data = array_merge($data, ['image' => $image]);
        }

        $post->update($data + ["admin_id" => auth()->user()->id]);

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

        $post = Post::findOrFail($id);
        $post->delete();
        return response()->noContent();
    }
}
