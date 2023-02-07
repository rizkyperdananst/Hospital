<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('dashboard.profile.profile', compact('profile'),
        ['title' => 'Profile']);
    }

    public function show($id)
    {
        $profile = Profile::find($id);
        return view('dashboard.profile.detail', compact('profile'),
        ['title' => 'Profile']);
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('dashboard.profile.edit', compact('profile'),
        ['title' => 'Profile']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'berdiri' => 'required|max:4',
            'pendiri' => 'required',
            'pengelola' => 'required',
            'image' => 'image|file|max:2048|mimes:jpg,jpeg,png|required',
            'alamat' => 'required',
            'keterangan' => 'required'
        ]);
        // +
        $extension = $request->file('image')->getClientOriginalExtension();
        $image = 'profile'. '-' .rand(). '.' .$extension;
        $path = $request->file('image')->storeAs('profile', $image, 'public');

        Profile::find($id)->update([
            'nama' => $request->nama,
            'berdiri' => $request->berdiri,
            'pendiri' => $request->pendiri,
            'pengelola' => $request->pengelola,
            'image' => $image,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan
        ]);
        return redirect()->route('profile.index')->with('status', 'Data Profile Berhasil Di Update');
    }
}
