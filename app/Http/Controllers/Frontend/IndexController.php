<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Admin;
use App\Models\Rate;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;


class IndexController extends Controller
{
    public function index(Request $request)
    {
        $banner = Banner::all();
        $rate = Rate::all();
        $perPage = $request->input('per_page', 4);
        $product = Product::paginate($perPage);
        return view('frontend.index', compact('banner','rate','product'));
    }

public function show(int $id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('product.show', compact('product'));
        } else {
            return redirect()->route('frontend.product')->with('error', 'Product not found.');
        }
    }

}