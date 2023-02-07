@extends('layouts.dashboard')
@section('title', 'Admin | Data Petugas')
    
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
                <h5>Data Petugas</h5>
                <a href="{{ route('officer.create') }}" class="btn btn-info">Tambah Petugas</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gaji</th>
                                <th>Shift</th>
                                <th>Jenis Kelamin</th>
                                <th>Jam Kerja</th>
                                <th>Jam Pulang</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gaji</th>
                                <th>Shift</th>
                                <th>Jenis Kelamin</th>
                                <th>Jam Kerja</th>
                                <th>Jam Pulang</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($officers as $officer)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $officer->nama }}</td>
                                <td>Rp. {{ $officer->gaji }}</td>
                                <td>{{ $officer->shift }}</td>
                                <td>{{ $officer->jenis_kelamin }}</td>
                                <td>{{ $officer->jam_kerja }}</td>
                                <td>{{ $officer->jam_pulang }}</td>
                                <td>{{ $officer->alamat }}</td>
                                <td>
                                    <a href="{{ route('officer.edit', $officer->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('officer.destroy', $officer->id) }}" method="POST" class="d-inline">
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