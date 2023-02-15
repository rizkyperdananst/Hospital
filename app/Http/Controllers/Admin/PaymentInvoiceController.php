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

    public function getNameRoom($id)
    {
        $nameRoom = NameRoom::where('id', $id)->get();
        return response()->json($nameRoom);
    }

    public function getClassRoom($id)
    {
        $classRoom = ClassRoom::where('name_room_id', $id)->get();
        return response()->json($classRoom);
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

    public function store(Request $request)
    {
        $validate = $request->validate([
            'patient_id' => 'required|integer',
            'officer_id' => 'required|integer',
            'poly_id' => 'required|integer',
            'drug_id' => 'required|integer',
            'name_room_id' => 'required|integer',
            'class_room_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'tanggal_faktur' => 'required|date',
            'total_bayar' => 'nullable',
            'keterangan' => 'required'
        ]);

        dd($validate);
    }
}
