@extends('layouts.dashboard')
@section('title', 'Admin | Data Perawat')
    
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
                <h5>Data Perawat</h5>
                <a href="{{ route('nurse.create') }}" class="btn btn-info">Tambah Perawat</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Gaji</th>
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
                            @foreach ($nurses as $nurse)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $nurse->nama }}</td>
                                <td>Rp. {{ $nurse->gaji }}</td>
                                <td>{{ $nurse->jam_kerja }}</td>
                                <td>{{ $nurse->jam_pulang }}</td>
                                <td>{{ $nurse->alamat }}</td>
                                <td>
                                    <a href="{{ route('nurse.edit', $nurse->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('nurse.destroy', $nurse->id) }}" method="POST" class="d-inline">
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