@extends('layouts.dashboard')
@section('title', 'Admin | Pasien')
    
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
                <h5>Pasien</h5>
                <a href="{{ route('patient.create') }}" class="btn btn-info">Tambah Pasien</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Ruangan Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Ruangan Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($patients as $patient)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $patient->nama }}</td>
                                <td>{{ $patient->jenis_kelamin }}</td>
                                <td>{{ $patient->nameRooms->nama }}</td>
                                <td>{{ $patient->classRooms->nama }}</td>
                                <td>
                                    <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('patient.show', $patient->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('patient.destroy', $patient->id) }}" method="POST" class="d-inline">
                                        @csrf
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