@extends('layouts.dashboard')
@section('title', 'Admin | Edit Kelas Ruangan')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Edit Kelas Ruangan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('classroom.update', $classRoom->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name_room_id" class="form-label">Nama Ruangan</label>
                            <select name="name_room_id" id="name_room_id" class="form-control @error('name_room_id') is-invalid @enderror">
                                <option selected>--Pilih Nama Ruangan--</option>
                                @foreach ($nameRoom as $nr)
                                    @if ($classRoom->name_room_id == $nr->id)
                                        <option value="{{ $nr->id }}" selected>{{ $nr->nama }}</option>
                                    @else
                                        <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Kelas Ruangan</label>
                            <input type="text" name="nama" value="{{ $classRoom->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="biaya" class="form-label">Biaya</label>
                            <input type="number" name="biaya" value="{{ $classRoom->biaya }}" id="biaya" class="form-control @error('biaya') is-invalid @enderror">
                            @error('biaya')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="fasilitas" class="form-label">Fasilitas</label>
                            <input type="text" name="fasilitas" value="{{ $classRoom->fasilitas }}" id="fasilitas" class="form-control @error('fasilitas') is-invalid @enderror">
                            @error('fasilitas')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror">{{ $classRoom->keterangan }}</textarea>
                            @error('keterangan')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-info float-end ms-3">Edit Kelas Ruangan</button>
                            <a href="{{ route('classroom.index') }}" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection