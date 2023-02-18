<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Nurse;
use App\Models\Officer;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $patient = Patient::all()->count();
        $officer = Officer::all()->count();
        $nurse = Nurse::all()->count();
        $doctor = Doctor::all()->count();

        return view('dashboard.dashboard', compact('patient', 'officer', 'nurse', 'doctor'),
        ['title' => 'Dashboard']);
    }
}
