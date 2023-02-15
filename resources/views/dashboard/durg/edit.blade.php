@extends('layouts.dashboard')
@section('title', 'Admin | Edit Obat')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Obat</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('durg.update', $durg->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{ $durg->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Input nama obat">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenis" class="form-label">Jenis</label>
                                <input type="text" name="jenis" value="{{ $durg->jenis }}" id="jenis" class="form-control @error('jenis') is-invalid @enderror" placeholder="Input jenis obat">
                                @error('jenis')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" name="harga" value="{{ $durg->harga }}" id="harga" class="form-control @error('harga') is-invalid @enderror" placeholder="Input harga obat">
                                @error('harga')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Input keterangan">{{ $durg->keterangan }}</textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Obat</button>
                                <a href="{{ route('durg.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection