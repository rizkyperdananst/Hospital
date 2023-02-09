@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Nama Ruangan')
    
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Tambah Nama Ruangan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('nameroom.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Input nama ruangan">
                            @error('nama')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <button class="btn btn-info float-end ms-3">Tambah Nama Ruangan</button>
                            <a href="{{ route('nameroom.index') }}" class="btn btn-warning float-end">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
@endsection