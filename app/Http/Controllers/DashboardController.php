<?php

namespace App\Http\Controllers;

use App\Models\ProtectedObject;
use Illuminate\Http\Request;
use App\Models\Camera;
use App\Models\Alert;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCameras = Camera::where('user_id', auth()->id())->count();
        $totalAlerts = Alert::whereHas(
            'camera',
            function ($query) {
                $query->where('user_id', auth()->id());
            }
        )->count();
        $totalProtectedObjects = ProtectedObject::whereHas(
            'camera',
            function ($query) {
                $query->where('user_id', auth()->id());
            }
        )->count();
        return view('dashboard', compact('totalCameras', 'totalAlerts', 'totalProtectedObjects'));
    }
}
