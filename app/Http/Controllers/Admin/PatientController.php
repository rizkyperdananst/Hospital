<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Doctor;
use App\Models\NameRoom;
use App\Models\Nurse;
use App\Models\Registration;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::orderBy('id', 'desc')->get();
        return view('dashboard.patient.patient', compact('patients'),
        ['title' => 'Patient']);
    }

    public function getClassRoom($id)
    {
        $classRoom = ClassRoom::where('name_room_id', $id)->get();
        return response()->json($classRoom);
    }

    public function create()
    {
       
        $genders = ['Laki-Laki', 'Perempuan'];
        $religions = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Khonghucu'];
        $statuses = ['Menikah', 'Belum Menikah'];
        $educations = ['SD', 'SMP', 'SMA', 'SMK', 'S1', 'S2', 'S3', 'Profesor'];
        $nameRooms = NameRoom::all();
        $nurses = Nurse::all();
        $doctors = Doctor::all();
        $nameRoom = NameRoom::all();
        $registrations = Registration::all();
 
        return view('dashboard.patient.create', compact('genders', 'religions', 'statuses', 'educations', 'nameRooms', 'nurses', 'doctors', 'nameRoom', 'registrations'),
        ['title' => 'Patient']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:50',
            'orang_tua' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'date|required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'no_kontak' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'name_room_id' => 'required|integer',
            'class_room_id' => 'required|integer',
            'registration_id' => 'required|integer',
            'nurse_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'alamat' => 'required',
        ]);

        $patient = Patient::create($validate);
        return redirect()->route('patient.index')->with('status', 'Data Pasien Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('dashboard.patient.detail', compact('patient'),
        ['title' => 'Patient']);
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        $genders = ['Laki-Laki', 'Perempuan'];
        $religions = ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Khonghucu'];
        $statuses = ['Menikah', 'Belum Menikah'];
        $educations = ['SD', 'SMP', 'SMA', 'SMK', 'S1', 'S2', 'S3', 'Profesor'];
        $nameRooms = NameRoom::all();
        $nurses = Nurse::all();
        $doctors = Doctor::all();
        $nameRoom = NameRoom::all();
        $classRoom = CLassRoom::where('name_room_id', $patient->name_room_id)->get();
        $registrations = Registration::all();

        return view('dashboard.patient.edit', compact('patient', 'genders', 'religions', 'statuses', 'educations', 'nameRooms', 'nurses', 'doctors', 'nameRoom', 'classRoom', 'registrations'), 
        ['title' => 'Patient']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required|max:50',
            'orang_tua' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'date|required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'no_kontak' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'name_room_id' => 'required|integer',
            'class_room_id' => 'required|integer',
            'registration_id' => 'required|integer',
            'nurse_id' => 'required|integer',
            'doctor_id' => 'required|integer',
            'alamat' => 'required',
        ]);

        $patient = Patient::find($id)->update($validate);
        return redirect()->route('patient.index')->with('status', 'Data Pasien Berhasil Di Update');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id)->delete();
        return redirect()->route('patient.index')->with('status', 'Data Pasien Berhasil Di Hapus');
    }
}
