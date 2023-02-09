<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassRoomController extends Controller
{
    public function index()
    {
        return view('dashboard.classroom.classroom',
        ['title' => 'Class Room']);
    }
}
