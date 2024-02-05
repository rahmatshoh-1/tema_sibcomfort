<?php

namespace App\Http\Controllers\Dashboard;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $products->orderBy($sortBy, $sortDir);
        } else {
            $products->orderBy('created_at', 'desc');
        }

        return inertia('Dashboard/Product/Index', [
            'products' => $products->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/Product/Create', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $image = Helper::uploadFile($request->image);

        $data = $request->validated();
        $data = array_merge($data, ['image' => $image]);
        Product::create($data);

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $product->load('admin:id,name');
        return inertia('Dashboard/Product/Edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if (str_starts_with($request->image, 'data')) {
            $image = Helper::uploadFile($request->image);
            $data = array_merge($data, ['image' => $image]);
        }

        $product->update($data);

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if (auth()->user()->role != 'admin') {
            abort(404);
        }

        $product->delete();
        return response()->noContent();
    }
}
