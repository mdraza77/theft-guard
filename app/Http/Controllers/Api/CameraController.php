<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cameras = Camera::latest()->get();

        return response()->json([
            'success' => true,
            'data' => $cameras,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'source_type' => 'required',
        ]);

        $camera = Camera::create([
            'name' => $request->name,
            'source_type' => $request->source_type,
            'stream_url' => $request->stream_url,
            'status' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Camera Added',
            'data' => $camera,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $camera = Camera::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $camera,
        ]);
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
