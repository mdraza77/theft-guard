<?php

namespace App\Http\Controllers;

use App\Models\ProtectedObject;
use Illuminate\Http\Request;
use App\Models\Camera;

class ProtectedObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objects = ProtectedObject::with('camera')
            ->latest()
            ->get();

        return view(
            'protected-objects.index',
            compact('objects')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cameras = Camera::all();

        return view(
            'protected-objects.create',
            compact('cameras')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'camera_id' => 'required',
            'name' => 'required'
        ]);

        ProtectedObject::create([
            'camera_id' => $request->camera_id,
            'name' => $request->name,
        ]);

        return redirect()
            ->route('protected-objects.index')
            ->with(
                'success',
                'Protected Object Created'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(ProtectedObject $protectedObject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProtectedObject $protectedObject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProtectedObject $protectedObject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProtectedObject $protectedObject)
    {
        //
    }
}
