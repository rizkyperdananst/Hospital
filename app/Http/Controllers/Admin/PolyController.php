<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poly;
use Illuminate\Http\Request;

class PolyController extends Controller
{
    public function index()
    {
        $polies = Poly::all();

        return view('dashboard.poly.poly', compact('polies'),
        ['title' => 'Poly']);
    }

    public function create()
    {
        $genders = ['Laki-Laki', 'Perempuan'];

        return view('dashboard.poly.create', compact('genders'),
        ['title' => 'Poly']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $poly = Poly::create($validate);
        return redirect()->route('poly.index')->with('status', 'Dara Poli Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $poly = Poly::find($id);

        return view('dashboard.poly.detail', compact('poly'),
        ['title' => 'Poly']);
    }

    public function edit($id)
    {
        $poly = Poly::find($id);
        $genders = ['Laki-Laki', 'Perempuan'];

        return view('dashboard.poly.edit', compact('poly', 'genders'),
        ['title' => 'Poly']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required|max:50',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);

        $poly = Poly::find($id)->update($validate);
        return redirect()->route('poly.index')->with('status', 'Data Poli Berhasil Di Update');
    }

    public function destroy($id)
    {
        $poly = Poly::find($id)->delete();
        return redirect()->route('poly.index')->with('status', 'Data Poli Berhasil Di Hapus');
    }
}
