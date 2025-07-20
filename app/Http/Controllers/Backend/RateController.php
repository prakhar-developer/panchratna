<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rate;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;

class RateController extends Controller
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
        $rate = Rate::all();
        return view('backend.pages.Rate.index', compact('rate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $roles  = Role::all();
        return view('backend.pages.Rate.create', compact('roles'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validation Data
    $request->validate([
        'gold1' => 'required|max:50',
        'gold2' => 'required|',
        'gold3' => 'required',
        'silver' => 'required',
        'from1' => 'required',
        'to1' => 'required',
    ]);

    // Create New Banner
    $rate = new Rate();
    $rate->gold1 = $request->gold1;
    $rate->gold2 = $request->gold2;
    $rate->gold3 = $request->gold3;
    $rate->silver = $request->silver;
    $rate->from1 = $request->from1;
    $rate->to1 = $request->to1;
    $rate->save();

    session()->flash('success', 'Rate has been Added !!');
    return redirect()->route('admin.rate.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Rate $rate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rate $rate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rate $rate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        if (is_null($this->user) || !$this->user->can('rate.delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any Banner !');
        }
        $rate = Rate::find($id);
        if (!is_null($rate)) {
            $rate->delete();
        }

        session()->flash('success', 'Rate has been deleted !!');
        return back();
    }
}
