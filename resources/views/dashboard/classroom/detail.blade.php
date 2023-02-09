@extends('layouts.dashboard')
@section('title', 'Admin | Detail Kelas Ruangan')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Kelas Ruangan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama Ruangan</th>
                                    <td>{{ $classRoom->nameRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Kelas Ruangan</th>
                                    <td>{{ $classRoom->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Biaya</th>
                                    <td>{{ $classRoom->biaya }}</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>{{ $classRoom->fasilitas }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $classRoom->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('classroom.index') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection