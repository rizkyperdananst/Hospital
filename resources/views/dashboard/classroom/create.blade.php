@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Kelas Ruangan')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Tambah Kelas Ruangan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('classroom.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name_room_id" class="form-label">Nama Ruangan</label>
                                <select name="name_room_id" id="name_room_id" class="form-control @error('name_room_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Nama Ruangan--</option>
                                    @foreach ($nameRooms as $nr)
                                        <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama Kelas Ruangan</label>
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Input nama kelas ruangan">
                                @error('nama')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="biaya" class="form-label">Biaya</label>
                                <input type="number" name="biaya" id="biaya" class="form-control @error('biaya') is-invalid @enderror" placeholder="Input biaya">
                                @error('biaya')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="fasilitas" class="form-label">Fasilitas</label>
                                <input type="text" name="fasilitas" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror" placeholder="Input fasilitas">
                                @error('fasilitas')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Input keterangan"></textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Tambah Kelas Ruangan</button>
                                <a href="{{ route('classroom.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection