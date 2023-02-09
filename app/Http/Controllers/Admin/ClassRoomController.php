<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\NameRoom;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        $classRooms = ClassRoom::all();
        
        return view('dashboard.classroom.classroom', compact('classRooms'),
        ['title' => 'Class Room']);
    }

    public function create()
    {
        $nameRooms = NameRoom::all();

        return view('dashboard.classroom.create', compact('nameRooms'),
        ['title' => 'Class Room']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name_room_id' => 'required',
            'nama' => 'required',
            'biaya' => 'required|max:50',
            'fasilitas' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $classRoom = ClassRoom::create($validate);
        return redirect()->route('classroom.index')->with('status', 'Data Kelas Ruangan Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $classRoom = ClassRoom::find($id);

        return view('dashboard.classroom.detail', compact('classRoom'),
        ['title' => 'Class Room']);
    }

    public function edit($id)
    {
        $classRoom = ClassRoom::find($id);
        $nameRoom = NameRoom::all();

        return view('dashboard.classroom.edit', compact('classRoom', 'nameRoom'),
        ['title' => 'Class Room']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name_room_id' => 'required',
            'nama' => 'required',
            'biaya' => 'required|max:50',
            'fasilitas' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $classRoom = ClassRoom::find($id)->update($validate);
        return redirect()->route('classroom.index')->with('status', 'Data Kelas Ruangan Berhasil Di Update');           
    }

    public function destroy($id)
    {
        $classRoom = ClassRoom::find($id)->delete();

        return redirect()->route('classroom.index')->with('status', 'Data Kelas Ruangan Berhasil Di Hapus');
        
    }
}
