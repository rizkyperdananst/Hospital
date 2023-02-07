@extends('layouts.dashboard')
@section('title', 'Admin | Edit Perawat')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Edit Perawat</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('nurse.update', $nurse->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" value="{{ $nurse->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="gaji" class="form-label">Gaji</label>
                            <input type="number" name="gaji" value="{{ $nurse->gaji }}" id="gaji" class="form-control @error('gaji') is-invalid @enderror">
                            @error('gaji')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jam_kerja" class="form-label">Jam Kerja</label>
                            <input type="time" name="jam_kerja" value="{{ $nurse->jam_kerja }}" id="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror">
                            @error('jam_kerja')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="jam_pulang" class="form-label">Jam Pulang</label>
                            <input type="time" name="jam_pulang" value="{{ $nurse->jam_pulang }}" id="jam_pulang" class="form-control @error('jam_pulang') is-invalid @enderror">
                            @error('jam_pulang')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $nurse->alamat }}</textarea>
                            @error('alamat')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-info float-end ms-3">Edit Perawat</button>
                            <a href="{{ route('nurse.index') }}" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection