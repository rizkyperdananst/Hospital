<?php

namespace App\Http\Controllers\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->get();
        return view('dashboard.doctor.doctor', compact('doctors'),
        ['title' => 'Doctor']);
    }

    public function create()
    {
        $genders = ['Laki-Laki', 'Perempuan'];
        return view('dashboard.doctor.create', compact('genders'),
        ['title' => 'Doctor']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'jenis_kelamin' => 'required',
            'biaya_dokter' => 'required',
            'no_telepon' => 'required',
            'tgl_lahir' => 'required|date',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required',
        ]);


        Doctor::create($validate);
        return redirect()->route('doctor.index')->with('status', 'Data Dokter Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('dashboard.doctor.detail', compact('doctor'),
        ['title' => 'Doctor']);
    }

    public function edit($id)
    {
        $genders = ['Laki-Laki', 'Perempuan'];
        $doctor = Doctor::find($id);
        return view('dashboard.doctor.edit', compact('genders', 'doctor'),
        ['title' => 'Doctor']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'jenis_kelamin' => 'required',
            'biaya_dokter' => 'required',
            'no_telepon' => 'required',
            'tgl_lahir' => 'required|date',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required',
        ]);


        Doctor::find($id)->update($validate);
        return redirect()->route('doctor.index')->with('status', 'Data Dokter Berhasil Di Update');
    }

    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return redirect()->route('doctor.index')->with('status', 'Data Dokter Berhasil Di Hapus');
    }
}
