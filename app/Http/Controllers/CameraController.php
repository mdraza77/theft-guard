<?php

namespace App\Http\Controllers;

use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cameras = Camera::where(
            'user_id',
            auth()->id()
        )->latest()->get();

        return view('cameras.index', compact('cameras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cameras.create');
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

        Camera::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'source_type' => $request->source_type,
            'stream_url' => $request->stream_url,
            'status' => true,
        ]);

        return redirect()
            ->route('cameras.index')
            ->with('success', 'Camera Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Camera $camera)
    {
        return view('cameras.show', compact('camera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Camera $camera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Camera $camera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Camera $camera)
    {
        //
    }
}
