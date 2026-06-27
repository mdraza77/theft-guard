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
        $totalCameras = Camera::count();
        $totalAlerts = Alert::count();
        $totalProtectedObjects = ProtectedObject::count();
        return view('dashboard', compact('totalCameras', 'totalAlerts', 'totalProtectedObjects'));
    }
}
