<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('backend.pages.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles  = Role::all();
        return view('backend.pages.product.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'name' => 'required|max:50',
        'product_id' => 'required|unique:products,product_id',
        'weight' => 'required',
        'available' => 'required',
        'category' => 'required',
        'tags' => 'required',
        'descriptions' => 'required',
        'image' => 'required|image',
        'thumbnail_1' => 'required|image',
        'thumbnail_2' => 'required|image',
        'thumbnail_3' => 'required|image',
        'thumbnail_4' => 'required|image',
        'thumbnail_5' => 'required|image',
    ]);

    // Create a new product instance
    $product = new Product();
    $product->name = $request->name;
    $product->product_id = $request->product_id;
    $product->weight = $request->weight;
    $product->available = $request->available;
    $product->category = $request->category;
    $product->tags = $request->tags;
    $product->descriptions = $request->descriptions;

    // Handle image upload
    if ($request->hasFile('image')) {
        $product->image = $this->uploadFile($request->file('image'), 'products_image');
    }

    // Handle thumbnails upload
    foreach (range(1, 5) as $index) {
        $thumbnailKey = 'thumbnail_' . $index;
        if ($request->hasFile($thumbnailKey)) {
            $product->$thumbnailKey = $this->uploadFile($request->file($thumbnailKey), 'products_image/product_thumbnail', 'T' . $index);
        }
    }

    // Save the new product
    $product->save();

    // Flash success message and redirect
    session()->flash('success', 'Product has been added!');
    return redirect()->route('admin.product.index');
}

/**
 * Handle file upload and return the new file name.
 *
 * @param \Illuminate\Http\UploadedFile $file
 * @param string $directory
 * @param string|null $prefix
 * @return string
 */
protected function uploadFile($file, $directory, $prefix = '')
{
    $fileName = $prefix . time() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads/' . $directory), $fileName);
    return $fileName;
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
    public function edit(int $id)
    {
        if (is_null($this->user) || !$this->user->can('product.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
        }

        $product = Product::find($id);
        return view('backend.pages.product.edit', compact('product'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);
    
        // Validate the incoming request
        $request->validate([
            'name' => 'required|max:50',
            'product_id' => 'required|unique:products,product_id,' . $id,
            'weight' => 'required',
            'available' => 'required',
            'category' => 'required',
            'tags' => 'required',
            'descriptions' => 'required',
            'image' => 'nullable|image',
            'thumbnail_1' => 'nullable|image',
            'thumbnail_2' => 'nullable|image',
            'thumbnail_3' => 'nullable|image',
            'thumbnail_4' => 'nullable|image',
            'thumbnail_5' => 'nullable|image',
        ]);
    
        // Update product details
        $product->name = $request->name;
        $product->product_id = $request->product_id;
        $product->weight = $request->weight;
        $product->available = $request->available;
        $product->category = $request->category;
        $product->tags = $request->tags;
        $product->descriptions = $request->descriptions;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products_image'), $newImageName);
            $product->image = $newImageName;
        }
    
        // Handle thumbnails upload
        for ($i = 1; $i <= 5; $i++) {
            $thumbnailKey = 'thumbnail_' . $i;
            if ($request->hasFile($thumbnailKey)) {
                $thumbnail = $request->file($thumbnailKey);
                $newThumbnailName = 'T' . $i . time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move(public_path('uploads/products_image/product_thumbnail'), $newThumbnailName);
                $product->$thumbnailKey = $newThumbnailName;
            }
        }
    
        // Save updated product
        $product->save();
    
        // Flash success message and redirect
        session()->flash('success', 'Product has been updated!');
        return back();
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (is_null($this->user) || !$this->user->can('product.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any Products !');
        }
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        if ($product->image && File::exists(public_path("uploads/products_image/{$product->image}"))) {
            File::delete(public_path("uploads/products_image/{$product->image}"));
        }
        if ($product->image && File::exists(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_1}"))) {
            File::delete(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_1}"));
        }
        if ($product->image && File::exists(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_2}"))) {
            File::delete(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_2}"));
        }
        if ($product->image && File::exists(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_3}"))) {
            File::delete(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_3}"));
        }
        if ($product->image && File::exists(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_4}"))) {
            File::delete(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_4}"));
        }
        if ($product->image && File::exists(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_5}"))) {
            File::delete(public_path("uploads/products_image/product_thumbnail/{$product->thumbnail_5}"));
        }

        session()->flash('success', 'Product has been deleted !!');
        return back();
    }
}
