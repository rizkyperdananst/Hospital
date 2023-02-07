@extends('layouts.dashboard')
@section('title', 'Admin | Edit Petugas')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Petugas</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('officer.update', $officer->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{ $officer->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="gaji" class="form-label">Gaji</label>
                                <input type="number" name="gaji" value="{{ $officer->gaji }}" id="gaji" class="form-control @error('gaji') is-invalid @enderror">
                                @error('gaji')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="shift" class="form-label">Shift</label>
                                <select class="form-select @error('shift') is-invalid @enderror" name="shift" aria-label="Default select example">
                                    <option selected>Pilih Shift</option>
                                    @foreach ($shifts as $shift)
                                        @if ($officer->shift == $shift)
                                            <option value="{{ $shift }}" selected>{{ $shift }}</option>
                                        @else
                                            <option value="{{ $shift }}">{{ $shift }}</option>
                                        @endif
                                    @endforeach
                                  </select>
                                  @error('shift')
                                      <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    @foreach ($genders as $gender)
                                        @if ($officer->jenis_kelamin == $gender)
                                            <option value="{{ $gender }}" selected>{{ $gender }}</option>
                                        @else
                                            <option value="{{ $gender }}">{{ $gender }}</option>
                                        @endif
                                    @endforeach
                                  </select>
                                  @error('shift')
                                      <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                  @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jam_kerja" class="form-label">Jam Kerja</label>
                                <input type="time" name="jam_kerja" value="{{ $officer->jam_kerja }}" id="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror">
                                @error('jam_kerja')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="jam_pulang" class="form-label">Jam Pulang</label>
                                <input type="time" name="jam_pulang" value="{{ $officer->jam_pulang }}" id="jam_pulang" class="form-control @error('jam_pulang') is-invalid @enderror">
                                @error('jam_pulang')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $officer->alamat }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Petugas</button>
                                <a href="{{ route('officer.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection