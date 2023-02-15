<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Doctor;
use App\Models\NameRoom;
use App\Models\Officer;
use App\Models\Patient;
use App\Models\Poly;
use Illuminate\Http\Request;

class PaymentInvoiceController extends Controller
{
    public function index()
    {
        return view('dashboard.payment-invoice.payment-invoice',
        ['title' => 'Payment Invoice']);
    }

    public function create()
    {
        $patients = Patient::all();
        $officers = Officer::all();
        $polies = Poly::all();
        $nameRooms = NameRoom::all();
        $classRooms = ClassRoom::all();
        $doctors = Doctor::all();

        return view('dashboard.payment-invoice.create', compact('patients', 'officers', 'polies', 'nameRooms', 'classRooms', 'doctors'),
        ['title' => 'Payment Invoice']);
    }
}
