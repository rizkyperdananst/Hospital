@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Dokter')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Dokter</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('doctor.update', $doctor->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{ $doctor->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="spesialis" class="form-label">Spesialis</label>
                                <input type="text" name="spesialis" value="{{ $doctor->spesialis }}" id="spesialis" class="form-control @error('spesialis') is-invalid @enderror">
                                @error('spesialis')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    @foreach ($genders as $gender)
                                        @if ($doctor->jenis_kelamin == $gender)
                                            <option value="{{ $gender }}" selected>{{ $gender }}</option>
                                        @else
                                            <option value="{{ $gender }}">{{ $gender }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('jenis_kelamin')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="biaya_dokter" class="form-label">Biaya Dokter</label>
                                <input type="number" name="biaya_dokter" value="{{ $doctor->biaya_dokter }}" id="biaya_dokter" class="form-control @error('biaya_dokter') is-invalid @enderror">
                                @error('biaya_dokter')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="no_telepon" class="form-label">Nomor Telepon</label>
                                <input type="number" name="no_telepon" value="{{ $doctor->no_telepon }}" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror">
                                @error('no_telepon')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $doctor->tgl_lahir }}" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jam_kerja" class="form-label">Jam Kerja</label>
                                <input type="time" name="jam_kerja" value="{{ $doctor->jam_kerja }}" id="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror">
                                @error('jam_kerja')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="jam_pulang" class="form-label">Jam Pulang</label>
                                <input type="time" name="jam_pulang" value="{{ $doctor->jam_pulang }}" id="jam_pulang" class="form-control @error('jam_pulang') is-invalid @enderror">
                                @error('jam_pulang')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $doctor->alamat }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Dokter</button>
                                <a href="{{ route('doctor.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection