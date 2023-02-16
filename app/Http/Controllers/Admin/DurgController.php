<?php

namespace App\Http\Controllers\Admin;

use App\Models\Durg;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class DurgController extends Controller
{
    public function index()
    {
        $durgs = Durg::orderBy('id', 'desc')->get();

        return view('dashboard.durg.durg', compact('durgs'),
        ['title' => 'Durg']);
    }

    public function create()
    {
        return view('dashboard.durg.create',
        ['title' => 'Durg']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|image|max:2048|mimes:jpg,jpeg,png',
            'nama' => 'required|max:50',
            'jenis' => 'required|max:50',
            'harga' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $extenstion = $request->file('image')->getClientOriginalExtension();
        $imageName = 'durg'. '-' .rand(). '.' .$extenstion;
        $path = $request->file('image')->storeAs('durgs', $imageName, 'public');

        $durg = Durg::create([
            'image' => $imageName,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request-> harga,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('durg.index')->with('status', 'Data Obat Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $durg = Durg::find($id);

        return view('dashboard.durg.edit', compact('durg'),
        ['title' => 'Durg']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'image' => 'nullable|image|max:2048|mimes:jpg,jpeg,png',
            'nama' => 'required|max:50',
            'jenis' => 'required|max:50',
            'harga' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $durg = Durg::find($id);

        if($request->file('image')) {
            $imageOld = 'storage/durgs/'. $durg->image;
            if(File::exists($imageOld)) {
                File::delete($imageOld);
                $extenstion = $request->file('image')->getClientOriginalExtension();
                $imageName = 'durg'. '-' .rand(). '.' .$extenstion;
                $path = $request->file('image')->storeAs('durgs', $imageName, 'public');
            }
        } else {
            $imageName = $durg->image;
        }

        $durg = Durg::find($id)->update([
            'image' => $imageName,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan
        ]);

        return redirect()->route('durg.index')->with('status', 'Data Obat Berhasil Di Update');
    }

    public function destroy($id)
    {
        $durg = Durg::find($id);
        $durg->delete();
        File::delete('storage/durgs/'. $durg->image);
        return redirect()->route('durg.index')->with('status', 'Data Obat Berhasil Di Hapus');
    }

}
