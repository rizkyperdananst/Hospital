<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Doctor;
use App\Models\Durg;
use App\Models\NameRoom;
use App\Models\Officer;
use App\Models\Patient;
use App\Models\PaymentInvoice;
use App\Models\Poly;
use Illuminate\Http\Request;

class PaymentInvoiceController extends Controller
{
    public function index()
    {
        $paymentInvoices = PaymentInvoice::orderBy('id', 'desc')->get();

        return view('dashboard.payment-invoice.payment-invoice', compact('paymentInvoices'),
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
        $durgs = Durg::all();
        $nameRooms = NameRoom::all();
        $classRooms = ClassRoom::all();
        $doctors = Doctor::all();

        return view('dashboard.payment-invoice.create', compact('patients', 'officers', 'polies', 'durgs', 'nameRooms', 'classRooms', 'doctors'),
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

        $paymentInvoice = PaymentInvoice::create($validate);
        return redirect()->route('paymentinvoice.index')->with('status', 'Data Faktur Pembayaran Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $pi = PaymentInvoice::find($id);

        return view('dashboard.payment-invoice.detail', compact('pi'),
        ['title' => 'Payment Invoice']);
    }

    public function destroy($id)
    {
        $paymentInvoice = PaymentInvoice::find($id)->delete();
        return redirect()->route('paymentinvoice.index')->with('status', 'Data Faktur Pembayaran Berhasil Di Hapus');
    }
}
