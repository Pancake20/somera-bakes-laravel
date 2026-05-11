<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $s) {
            $settings[$s->key] = $s->value;
        }

        $products = Product::orderBy('sort_order')->get();
        $testimonials = Testimonial::all();

        return view('admin.dashboard', compact('settings', 'products', 'testimonials'));
    }

    public function updateSettings(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            Setting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return back()->with('success', 'Settings updated successfully.');
    }

    public function storeProduct(Request $request)
    {
        $data = $request->except('_token', 'image');
        $data['is_bestseller'] = $request->has('is_bestseller');
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/assets');
            $data['image'] = Storage::url($path);
        }

        Product::create($data);
        return back()->with('success', 'Product added successfully.');
    }

    public function updateProduct(Request $request, Product $product)
    {
        $data = $request->except('_token', 'image');
        $data['is_bestseller'] = $request->has('is_bestseller');
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/assets');
            $data['image'] = Storage::url($path);
        }

        $product->update($data);
        return back()->with('success', 'Product updated successfully.');
    }

    public function destroyProduct(Product $product)
    {
        $product->delete();
        return back()->with('success', 'Product deleted.');
    }

    public function storeTestimonial(Request $request)
    {
        $data = $request->except('_token', 'image');
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/assets');
            $data['image'] = Storage::url($path);
        }

        Testimonial::create($data);
        return back()->with('success', 'Testimonial added successfully.');
    }

    public function destroyTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('success', 'Testimonial deleted.');
    }
}
