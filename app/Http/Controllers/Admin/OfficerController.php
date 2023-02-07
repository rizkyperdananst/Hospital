<?php

namespace App\Http\Controllers\Admin;

use App\Models\Officer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfficerController extends Controller
{
    public function index()
    {
        $officers = Officer::all();
        return view('dashboard.officer.officer', compact('officers'),
        ['title' => 'Officer']);
    }

    public function create()
    {
        $shifts = ['Pagi', 'Sore', 'Malam'];
        $genders = ['Laki-Laki', 'Perempuan'];
        return view('dashboard.officer.create', compact('shifts', 'genders'),
        ['title' => 'Officer']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'gaji' => 'required',
            'shift' => 'required',
            'jenis_kelamin' => 'required',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required'
        ]);

        Officer::create($validate);
        return redirect()->route('officer.index')->with('status', 'Data Petugas Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $officer = Officer::find($id);
        $shifts = ['Pagi', 'Sore', 'Malam'];
        $genders = ['Laki-Laki', 'Perempuan'];
        return view('dashboard.officer.edit', compact('officer', 'shifts', 'genders'),
        ['title' => 'Officer']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'gaji' => 'required',
            'shift' => 'required',
            'jenis_kelamin' => 'required',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required'
        ]);

        Officer::find($id)->update($validate);
        return redirect()->route('officer.index')->with('status', 'Data Petugas Berhasil Di Update');
    }

    public function destroy($id)
    {
        Officer::find($id)->delete();
        return redirect()->route('officer.index')->with('status', 'Data Petugas Berhasil Di Hapus');
    }
}
