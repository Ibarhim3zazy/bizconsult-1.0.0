<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(config('pagination.count'));
        return view('admin.testimonials.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;
        DB::transaction(function () use ($data, $image) {
        $image->store('testimonials', 'public');
        $data['image'] = $image->hashName();
        Testimonial::create($data);
        });
        return back()->with('success', __('keywords.testimonial_created_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            $image = $request->image;
            DB::transaction(function () use ($testimonial, $data, $image) {
                Storage::delete("public/testimonials/$testimonial->image");
                $image->store('testimonials', 'public');
                $data['image'] = $image->hashName();
                $testimonial->update($data);
            });
            return back()->with('success', __('keywords.testimonial_updated_successfully'));
        }

        $testimonial->update($data);

        return back()->with('success', __('keywords.testimonial_updated_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {

        if (file_exists("storage/testimonials/$testimonial->image")) {
            DB::transaction(function () use ($testimonial) {
                Storage::delete("public/testimonials/$testimonial->image");
                $testimonial->delete();
            });
            
            return back()->with('success', __('keywords.testimonial_has_been_deleted_successfully'));
        }

        $testimonial->delete();
        return back()->with('success', __('keywords.testimonial_has_been_deleted_successfully'));
    }
}
