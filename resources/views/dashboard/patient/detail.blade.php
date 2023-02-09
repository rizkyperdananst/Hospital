@extends('layouts.dashboard')
@section('title', 'Admin | Detail Pasien')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Data Pasien</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nomor Pasien</th>
                                    <td>{{ $patient->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Orang Tua</th>
                                    <td>{{ $patient->orang_tua }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $patient->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $patient->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $patient->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <td>{{ $patient->usia }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Kontak</th>
                                    <td>{{ $patient->no_kontak }}</td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                    <td>{{ $patient->agama }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $patient->status }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan</th>
                                    <td>{{ $patient->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $patient->pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ruangan</th>
                                    <td>{{ $patient->nameRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ruangan Kelas</th>
                                    <td>{{ $patient->classRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Penanggung Jawab</th>
                                    <td>{{ $patient->registrations->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Perawat Yang Menangani</th>
                                    <td>{{ $patient->nurses->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Dokter Yang Menangani</th>
                                    <td>{{ $patient->doctors->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $patient->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('patient.index') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection