<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

class AdminsController extends Controller
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
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (is_null($this->user) || !$this->user->can('admin.view')) {
            abort(403, 'Sorry !! You are Unauthorized to view any admin !');
        }

        $admins = Admin::where('id', '!=', 1)->get();
        return view('backend.pages.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (is_null($this->user) || !$this->user->can('admin.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any admin !');
        }

        $roles  = Role::all();
        return view('backend.pages.admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (is_null($this->user) || !$this->user->can('admin.create')) {
            abort(403, 'Sorry !! You are Unauthorized to create any admin !');
        }

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:admins',
            'image' => 'required',
            'username' => 'required|max:100|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create New Admin
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
      
        $admin->password = Hash::make($request->password);

        if ($request->image != "") {
            // here we will store image
            $image = $request->file('image');
           // $fileName = time().'.'.$request->file->extension(); 
          $fileName = strtolower(pathinfo($image,PATHINFO_EXTENSION));
          $newimagesname= time().'.'.$fileName;
          if ($request->image->move(public_path("uploads/admin_image"), $newimagesname))
     
    {
        $admin->image = $newimagesname;
        $admin->save();
    
    }else
    {
        return back()->with('error','Image not uploaded');
    }
}  

        if ($request->roles) {
            $admin->assignRole($request->roles);
        }

        session()->flash('success', 'Admin has been created !!');
        return redirect()->route('admin.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admins = Admin::where('id', '!=', 1)->get();
        // Or however you are retrieving your admins
        return view('backend.layouts.logout', compact('admins'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        if (is_null($this->user) || !$this->user->can('admin.edit')) {
            abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
        }

        $admin = Admin::find($id);
        $roles  = Role::all();
        return view('backend.pages.admins.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
{
    if (is_null($this->user) || !$this->user->can('admin.edit')) {
        abort(403, 'Sorry !! You are Unauthorized to edit any admin !');
    }

    // Check if the admin is the Super Admin and prevent updates
    if ($id === 1) {
        session()->flash('error', 'Sorry !! You are not authorized to update this Admin as this is the Super Admin. Please create a new one if you need to test !');
        return back();
    }

    // Find the admin
    $admin = Admin::find($id);

    // Validation Data
    $request->validate([
        'name' => 'required|max:50',
        'email' => 'required|max:100|email|unique:admins,email,' . $id,
        'password' => 'nullable|min:6|confirmed',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation
    ]);

    // Update Admin Data
    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->username = $request->username;

    // Handle Password Update
    if ($request->filled('password')) {
        $admin->password = Hash::make($request->password);
    }

    // Handle Image Upload
    if ($request->hasFile('image')) {
        // Delete old image if it exists
        if ($admin->image && File::exists(public_path("uploads/admin_image/{$admin->image}"))) {
            File::delete(public_path("uploads/admin_image/{$admin->image}"));
        }

        // Store new image
        $image = $request->file('image');
        $fileName = time() . '.' . $image->extension();
        $image->move(public_path("uploads/admin_image"), $fileName);

        // Update image path in the database
        $admin->image = $fileName;
    }

    // Save the admin data
    $admin->save();

    // Update roles
    $admin->roles()->detach();
    if ($request->roles) {
        $admin->assignRole($request->roles);
    }

    // Flash success message and redirect
    session()->flash('success', 'Admin has been updated !!');
    return back();
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        if (is_null($this->user) || !$this->user->can('admin.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any admin !');
        }

        // TODO: You can delete this in your local. This is for heroku publish.
        // This is only for Super Admin role,
        // so that no-one could delete or disable it by somehow.
        if ($id === 1) {
            session()->flash('error', 'Sorry !! You are not authorized to delete this Admin as this is the Super Admin. Please create new one if you need to test !');
            return back();
        }

        $admin = Admin::find($id);
        if (!is_null($admin)) {
            $admin->delete();
        }
        if ($admin->image && File::exists(public_path("uploads/admin_image/{$admin->image}"))) {
            File::delete(public_path("uploads/admin_image/{$admin->image}"));
        }

        session()->flash('success', 'Admin has been deleted !!');
        return back();
    }
}
