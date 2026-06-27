<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ProtectedObject;
use Illuminate\Http\Request;

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

        return response()->json([
            'success' => true,
            'data' => $objects,
        ]);
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

        $protectedObject = ProtectedObject::create([
            'camera_id' => $request->camera_id,
            'name' => $request->name,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Protected Object Created',
            'data' => $protectedObject,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
