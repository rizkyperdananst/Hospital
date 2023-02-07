@extends('layouts.dashboard')
@section('title', 'Admin | Data Dokter')
    
@section('content')
<div class="row mb-3">
    <div class="col-12">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h5>Data Dokter</h5>
                <a href="{{ route('doctor.create') }}" class="btn btn-info">Tambah Dokter</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Spesialis</th>
                                <th>Jenis Kelamin</th>
                                <th>Biaya Dokter</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Spesialis</th>
                                <th>Jenis Kelamin</th>
                                <th>Biaya Dokter</th>
                                <th>No Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($doctors as $doctor)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $doctor->nama }}</td>
                                <td>{{ $doctor->spesialis }}</td>
                                <td>{{ $doctor->jenis_kelamin }}</td>
                                <td>{{ $doctor->biaya_dokter }}</td>
                                <td>{{ $doctor->no_telepon }}</td>
                                <td>
                                    <a href="{{ route('doctor.edit', $doctor->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('doctor.show', $doctor->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('doctor.destroy', $doctor->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection