@extends('layouts.dashboard')
@section('title', 'Admin | Detail Dokter')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Data Dokter</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $doctor->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Spesialis</th>
                                    <td>{{ $doctor->spesialis }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $doctor->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Biaya Dokter</th>
                                    <td>{{ $doctor->biaya_dokter }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <td>{{ $doctor->no_telepon }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $doctor->tgl_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Jam Kerja</th>
                                    <td>{{ $doctor->jam_kerja }}</td>
                                </tr>
                                <tr>
                                    <th>Jam Pulang</th>
                                    <td>{{ $doctor->jam_pulang }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $doctor->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('doctor.index') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection