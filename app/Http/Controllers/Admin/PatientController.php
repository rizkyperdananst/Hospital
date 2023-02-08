<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        // $patients = Patient::all();
        return view('dashboard.patient.patient',
        ['title' => 'Patient']);
    }

    public function create()
    {
        $data = Patient::latest('no_pasien')->first();
        if(!$data) {
            $noPasien = "NP0001";
        } else {
            $oldNoPasient = intval(substr($data->no_pasien, 4, 4));
            $noPasien = 'NP' . sprintf("%04s", ++$oldNoPasient);
        }
        $genders = ['Laki-Laki', 'Perempuan'];
        return view('dashboard.patient.create', compact('genders', 'noPasien'),
        ['title' => 'Patient']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'no_pasien' => 'required',
            'nama' => 'required|max:50',
            'tgl_lahir' => 'date|required',
            'jenis_kelamin' => 'required',
            'tinggi_badan' => 'required|max:10',
            'berat_badan' => 'required|max:10',
            'alamat' => 'required'
        ]);

        Patient::create($validate);
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
        $genders = ['Laki-Laki', 'Perempuan'];
        $patient = Patient::find($id);
        return view('dashboard.patient.edit', compact('genders', 'patient'), 
        ['title' => 'Patient']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'no_pasien' => 'required',
            'nama' => 'required|max:50',
            'tgl_lahir' => 'date|required',
            'jenis_kelamin' => 'required',
            'tinggi_badan' => 'required|max:10',
            'berat_badan' => 'required|max:10',
            'alamat' => 'required'
        ]);

        Patient::find($id)->update($validate);
        return redirect()->route('patient.index')->with('status', 'Data Pasien Berhasil Di Update');
    }

    public function destroy($id)
    {
        Patient::find($id)->delete();
        return redirect()->route('patient.index')->with('status', 'Data Pasien Berhasil Di Hapus');
    }
}
