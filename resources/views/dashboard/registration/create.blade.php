@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Pendaftaran')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Tambah Pendaftaran</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('registration.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="no_registrasi" class="form-label">Nomor Registrasi</label>
                            <input type="text" name="no_registrasi" value="{{ $noRegister }}" id="no_registrasi" class="form-control @error('no_registrasi') is-invalid @enderror" readonly>
                            @error('no_registrasi')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Input nama">
                            @error('nama')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="officer_id" class="form-label">Petugas</label>
                            <select name="officer_id" id="officer_id" class="form-select @error('officer_id') is-invalid @enderror">
                                <option selected>--Pilih Petugas--</option>
                                @foreach ($officers as $officer)
                                    <option value="{{ $officer->id }}">{{ $officer->nama }}</option>
                                @endforeach
                            </select>
                            @error('officer_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="no_kontak" class="form-label">Nomor Kontak</label>
                            <input type="number" name="no_kontak" id="no_kontak" class="form-control @error('no_kontak') is-invalid @enderror" placeholder="Input nomor kontak">
                            @error('no_kontak')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="hubungan_dengan_pasien" class="form-label">Hubungan Dengan Pasien</label>
                            <input type="text" name="hubungan_dengan_pasien" id="hubungan_dengan_pasien" class="form-control @error('hubungan_dengan_pasien') is-invalid @enderror" placeholder="Input hubungan dengan pasien">
                            @error('hubungan_dengan_pasien')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_registrasi" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal_registrasi" id="tanggal_registrasi" class="form-control @error('tanggal_registrasi') is-invalid @enderror">
                            @error('tanggal_registrasi')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                            @error('alamat')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-info float-end ms-3">Tambah Pendaftaran</button>
                            <a href="{{ route('registration.index') }}" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
@endsection