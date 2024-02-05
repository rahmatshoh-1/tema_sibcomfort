<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke($id)
    {
        $product = Product::where([
            'id' => $id,
            'status' => 'active'
        ])->firstOrFail();

        return inertia('ProductSingle', [
            'product' => $product,
            'randomProducts' => Product::where([
                'status' => 'active',
                'type' => $product->type
            ])->where('id', '<>', $id)->inRandomOrder()->take(4)->get()
        ]);
    }
}
