<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\NameRoom;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('dashboard.room.room', compact('rooms'),
        ['title' => 'Room']);
    }

    public function getClassRoom($id)
    {
        $classRoom = ClassRoom::where('name_room_id', $id)->get();
        return response()->json($classRoom);
    }

    public function create()
    {
        $nameRooms = NameRoom::all();

        return view('dashboard.room.create', compact('nameRooms'),
        ['title' => 'Room']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name_room_id' => 'required',
            'class_room_id' => 'required',
            'biaya' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $room = Room::create($validate);
        return redirect()->route('room.index')->with('status', 'Data Ruangan Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $room = Room::find($id);
        return view('dashboard.room.detail', compact('room'),
        ['title' => 'Room']);
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $nameRooms = NameRoom::all();
        $classRooms = ClassRoom::where('name_room_id', $room->name_room_id)->get();

        return view('dashboard.room.edit', compact('room', 'nameRooms', 'classRooms'),
        ['title' => 'Room']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name_room_id' => 'required',
            'class_room_id' => 'required',
            'biaya' => 'required|max:100',
            'keterangan' => 'required'
        ]);

        $room = Room::find($id)->update($validate);
        return redirect()->route('room.index')->with('status', 'Data Ruangan Berhasil Di Update');
    }

    public function destroy($id)
    {
        $room = Room::find($id)->delete();
        return redirect()->route('room.index')->with('status', 'Data Ruangan Berhasil Di Hapus');
    }
}
