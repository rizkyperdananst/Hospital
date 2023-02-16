<?php

namespace App\Http\Controllers\Admin;

use App\Models\Officer;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::orderBy('id', 'desc')->get();

        return view('dashboard.registration.registration', compact('registrations'),
        ['title' => 'Registration']);
    }

    public function create()
    {
        $data = Registration::latest('no_registrasi')->first();
        if(!$data) {
            $noRegister = 'NR0001';
        } else {
            $oldRegister = intval(substr($data->no_registrasi, 4, 4));
            $noRegister = 'NR' . sprintf("%04s", ++$oldRegister);
        }

        $officers = Officer::all();

        return view('dashboard.registration.create', compact('noRegister', 'officers'),
        ['title' => 'Registration']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'no_registrasi' => 'required|max:50',
            'nama' => 'required',
            'officer_id' => 'required',
            'no_kontak' => 'required|max:13',
            'tanggal_registrasi' => 'required', 
            'hubungan_dengan_pasien' => 'required|max:100',
            'alamat' => 'required'
        ]);

        $registration = Registration::create($validate);
        return redirect()->route('registration.index')->with('status', 'Data Pendaftaran Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $registration = Registration::find($id);

        return view('dashboard.registration.detail', compact('registration'),
        ['title' => 'Registration']);
    }

    public function edit($id)
    {
        $registration = Registration::find($id);
        $officers = Officer::all();

        return view('dashboard.registration.edit', compact('registration', 'officers'),
        ['title' => 'Registration']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'no_registrasi' => 'required|max:50',
            'nama' => 'required',
            'officer_id' => 'required',
            'no_kontak' => 'required|max:13',
            'tanggal_registrasi' => 'required', 
            'hubungan_dengan_pasien' => 'required|max:100',
            'alamat' => 'required'
        ]);

        $registration = Registration::find($id)->update($validate);
        return redirect()->route('registration.index')->with('status', 'Data Pendaftaran Berhasil Di Update');
    }

    public function destroy($id)
    {
        $registration = Registration::find($id)->delete();
        return redirect()->route('registration.index')->with('status', 'Data Pendaftaran Berhasil Di Hapus');
    }
}
