@extends('layouts.dashboard')
@section('title', 'Admin | Edit Pasien')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Pasien</h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('patient.update', $patient->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="no_pasien" class="form-label">Nomor Pasien</label>
                            <input type="text" name="no_pasien" value="{{ $patient->no_pasien }}" id="no_pasien" class="form-control @error('no_pasien') is-invalid @enderror" readonly>
                            @error('no_pasien')
                            <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" value="{{ $patient->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{ $patient->tgl_lahir }}" id="tgk_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                            @error('tgl_lahir')
                            <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" value="{{ $patient->jenis_kelamin }}" class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example">
                                <option selected>Pilih Jenis Kelamin</option>
                                @foreach ($genders as $gender)
                                    @if ($patient->jenis_kelamin == $gender)
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
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tinggi_badan" class="form-label">Tinggi Badan</label>
                            <input type="number" name="tinggi_badan" value="{{ $patient->tinggi_badan }}" id="tinggi_badan" class="form-control @error('tinggi_badan') is-invalid @enderror">
                            @error('tinggi_badan')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="berat_badan" class="form-label">Berat Badan</label>
                            <input type="number" name="berat_badan" value="{{ $patient->berat_badan }}" id="berat_badan" class="form-control @error('berat_badan') is-invalid @enderror">
                            @error('berat_badan')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" cols="30" rows="5">{{ $patient->alamat }}</textarea>
                            @error('alamat')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                       
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-info float-end ms-3">Tambah Pasien</button>
                            <a href="{{ route('patient.index') }}" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection