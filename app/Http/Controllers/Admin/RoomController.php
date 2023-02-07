<?php

namespace App\Http\Controllers\Admin;

use App\Models\NameRoom;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function index()
    {
        return view('dashboard.room.room',
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
}
