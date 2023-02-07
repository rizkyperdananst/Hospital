@extends('layouts.dashboard')
@section('title', 'Admin | Edit Profile')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{ $profile->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="berdiri" class="form-label">Berdiri</label>
                                <input type="text" name="berdiri" value="{{ $profile->berdiri }}" id="berdiri" class="form-control @error('berdiri') is-invalid @enderror">
                                @error('berdiri')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="pendiri" class="form-label">Pendiri</label>
                                <input type="text" name="pendiri" value="{{ $profile->pendiri }}" id="pendiri" class="form-control @error('pendiri') is-invalid @enderror">
                                @error('pendiri')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="pengelola" class="form-label">Pengelola</label>
                                <input type="text" name="pengelola" value="{{ $profile->pengelola }}" id="pengelola" class="form-control @error('berdiri') is-invalid @enderror">
                                @error('pengelola')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" cols="30" rows="3">{{ $profile->alamat }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" cols="30" rows="3">{{ $profile->keterangan }}</textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Profile</button>
                                <a href="{{ route('profile.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
@endsection