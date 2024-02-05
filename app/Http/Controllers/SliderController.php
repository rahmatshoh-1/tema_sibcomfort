<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sliders = Slider::query();
        $sortBy = $request->sort_by;
        $sortDir = $request->sort_dir;

        if (!empty($sortBy) && !empty($sortDir)) {
            if ($sortBy == 'last_updated_at') {
                $sortBy = 'updated_at';
            }
            $sliders->orderBy($sortBy, $sortDir);
        } else {
            $sliders->orderBy('created_at', 'desc');
        }

        return inertia('Dashboard/Slider/Index', [
            'sliders' => $sliders->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Dashboard/Slider/Create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $image = Helper::uploadFile($request->image);
        $mobileImage = Helper::uploadFile($request->mobile_image);

        $data = $request->validated();
        $data = array_merge($data, ['image' => $image, 'mobile_image' => $mobileImage]);
        Slider::create($data);

        return response()->noContent();
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        $slider->load('admin:id,name');
        return inertia('Dashboard/Slider/Edit', [
            'slider' => $slider,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $data = $request->validated();

        if (str_starts_with($request->image, 'data')) {
            $image = Helper::uploadFile($request->image);
            $data = array_merge($data, ['image' => $image]);
        }

        if (str_starts_with($request->mobile_image, 'data')) {
            $mobileImage = Helper::uploadFile($request->mobile_image);
            $data = array_merge($data, ['mobile_image' => $mobileImage]);
        }

        $slider->update($data);

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return response()->noContent();
    }
}
