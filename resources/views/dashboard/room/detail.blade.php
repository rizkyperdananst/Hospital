@extends('layouts.dashboard')
@section('title', 'Admin | Detail Ruangan')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Ruangan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama Ruangan</th>
                                    <td>{{ $room->nameRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>{{ $room->classRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Biaya</th>
                                    <td>{{ $room->biaya }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $room->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('room.index') }}" class="btn btn-warning float-end">Kembali  </a>
                </div>
            </div>
        </div>
    </div>
@endsection