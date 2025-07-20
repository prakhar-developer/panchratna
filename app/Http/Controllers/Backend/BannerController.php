<?php

namespace App\Http\Controllers\Backend;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;


class BannerController extends Controller
{
    public $user;

  public function __construct()
  {
      $this->middleware(function ($request, $next) {
          $this->user = Auth::guard('admin')->user();
          return $next($request);
      });
  }
    public function index()
    {
        $banner = Banner::all();
      return view('backend.pages.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
               $roles  = Role::all();
        return view('backend.pages.banner.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // Validation Data
    $request->validate([
        'title' => 'required|max:50',
        'descriptions' => 'required|',
        'username' => 'required',
        'image' => 'required',
    ]);

    // Create New Banner
    $banner = new Banner();
    $banner->title = $request->title;
    $banner->descriptions = $request->descriptions;
    $banner->username = $request->username;

    if ($request->image != "") {
      // here we will store image
      $image = $request->file('image');
     // $fileName = time().'.'.$request->file->extension(); 
    $fileName = strtolower(pathinfo($image,PATHINFO_EXTENSION));
    $newimagesname= time().'.'.$fileName;
   // echo '<pre>';print_r($_POST);die;
    if ($request->image->move(public_path("uploads/banner_image"), $newimagesname))
     
    {
        $banner->image = $newimagesname;
        $banner->save();
    
    }else
    {
        return back()->with('error','Image not uploaded');
    }
  } 
    session()->flash('success', 'Banner has been created !!');
    return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        
        $banner = Banner::find($id);
        return view('backend.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
{
    // Find the existing banner
    $banner = Banner::find($id);

    // Validation Data
    $request->validate([
        'title' => 'required|max:50',
        'descriptions' => 'required',
        'username' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update Banner data
    $banner->title = $request->title;
    $banner->descriptions = $request->descriptions;
    $banner->username = $request->username;

    // Handle Image Upload
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($banner->image && File::exists(public_path("uploads/banner_image/{$banner->image}"))) {
            File::delete(public_path("uploads/banner_image/{$banner->image}"));
        }

        // Store the new image
        $image = $request->file('image');
        $fileName = time() . '.' . $image->extension();
        $image->move(public_path("uploads/banner_image"), $fileName);

        // Update banner with new image name
        $banner->image = $fileName;
    }

    // Save updated banner
    $banner->save();

    // Flash success message and redirect
    session()->flash('success', 'Banner has been updated !!');
    return back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (is_null($this->user) || !$this->user->can('banner.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any Banner !');
        }
        $banner = Banner::find($id);
        if (!is_null($banner)) {
            $banner->delete();
        }
        if ($banner->image && File::exists(public_path("uploads/banner_image/{$banner->image}"))) {
            File::delete(public_path("uploads/banner_image/{$banner->image}"));
        }

        session()->flash('success', 'Banner has been deleted !!');
        return back();
    }
}
