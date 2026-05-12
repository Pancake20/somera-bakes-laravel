<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Testimonial;

class FrontendController extends Controller
{
    public function index()
    {
        // Load settings to a key-value array for easy access in Blade
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $s) {
            $settings[$s->key] = $s->value;
        }

        // Get specific products for the home page cards to match Firebase exactly
        $featured_left = Product::where('title_en', 'Choco Peanut Cookies')->first();
        $featured_right = Product::where('title_en', 'Sweet Jam Bread')->first();
        
        $testimonials = Testimonial::all();

        return view('frontend.index', compact('settings', 'featured_left', 'featured_right', 'testimonials'));
    }

    public function menu()
    {
        // Load settings
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $s) {
            $settings[$s->key] = $s->value;
        }

        // Load all products ordered by sort_order
        $products = Product::orderBy('sort_order')->get();

        return view('frontend.menu', compact('settings', 'products'));
    }

    public function ourStory()
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $s) {
            $settings[$s->key] = $s->value;
        }

        return view('frontend.our-story', compact('settings'));
    }

    public function productDetail($id)
    {
        $settingsRaw = Setting::all();
        $settings = [];
        foreach ($settingsRaw as $s) {
            $settings[$s->key] = $s->value;
        }

        $product = Product::findOrFail($id);

        return view('frontend.product-detail', compact('settings', 'product'));
    }
}
