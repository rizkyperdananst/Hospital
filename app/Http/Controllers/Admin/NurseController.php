<?php

namespace App\Http\Controllers\Admin;

use App\Models\Nurse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NurseController extends Controller
{
    public function index()
    {
        $nurses = Nurse::orderBy('id', 'desc')->get();
        return view('dashboard.nurse.nurse', compact('nurses'), 
        ['title' => 'Nurse']);
    }

    public function create()
    {
        return view('dashboard.nurse.create', 
        ['title' => 'Nurse']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'gaji' => 'required|max:50',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required'
        ]);

        Nurse::create($validate);
        return redirect()->route('nurse.index')->with('status', 'Data Perawat Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $nurse = Nurse::find($id);
        return view('dashboard.nurse.edit', compact('nurse'),
        ['title' => 'Nurse']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'gaji' => 'required|max:50',
            'jam_kerja' => 'required',
            'jam_pulang' => 'required',
            'alamat' => 'required'
        ]);

        Nurse::find($id)->update($validate);
        return redirect()->route('nurse.index')->with('status', 'Data Perawat Berhasil Di Update');
    }

    public function destroy($id)
    {
        Nurse::find($id)->delete();
        return redirect()->route('nurse.index')->with('status', 'Data Perawat Berhasil Di Hapus');
    }
}
