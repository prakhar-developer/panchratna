<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Silver;
use Illuminate\Http\Request;
use App\Models\Product;

class SilverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Query the products table to filter by category 'Gold'
        $product = Product::where('category', 'Silver')->get();

        // Return the filtered products, for example as JSON
        return view('frontend.silver', compact('product'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Silver $silver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Silver $silver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Silver $silver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Silver $silver)
    {
        //
    }
}
