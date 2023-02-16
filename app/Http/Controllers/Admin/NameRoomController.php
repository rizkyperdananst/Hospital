<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NameRoom;
use Illuminate\Http\Request;

class NameRoomController extends Controller
{
    public function index()
    {
        $nameRooms = NameRoom::orderBy('id', 'desc')->get();

        return view('dashboard.nameroom.nameroom', compact('nameRooms'),
        ['title' => 'Name Room']);
    }

    public function create()
    {
        return view('dashboard.nameroom.create',
        ['title' => 'Name Room']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $nameroom = NameRoom::create($validate);
        return redirect()->route('nameroom.index')->with('status', 'Data Nama Ruangan Berhasil Di Tambahkan');
    }

    public function edit($id)
    {
        $nameRoom = NameRoom::find($id);

        return view('dashboard.nameroom.edit', compact('nameRoom'),
        ['title' => 'Name Room']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $nameroom = NameRoom::find($id)->update($validate);
        return redirect()->route('nameroom.index')->with('status', 'Data Nama Ruangan Berhasil Di Update');
    }

    public function destroy($id)
    {
        $nameRoom = NameRoom::find($id)->delete();

        return redirect()->route('nameroom.index')->with('status', 'Data Nama Ruangan Berhasil Di Hapus');
    }
}
