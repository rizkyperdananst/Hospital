@extends('layouts.dashboard')
@section('title', 'Admin | Detail Pendaftaran')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Pendaftaran</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nomor Registrasi</th>
                                    <td>{{ $registration->no_registrasi }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $registration->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Petugas</th>
                                    <td>{{ $registration->officers->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Kontak</th>
                                    <td>{{ $registration->no_kontak }}</td>
                                </tr>
                                <tr>
                                    <th>Hubungan Dengan Pasien</th>
                                    <td>{{ $registration->hubungan_dengan_pasien }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>{{ $registration->tanggal_registrasi }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $registration->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('registration.index') }}" class="btn btn-warning float-end">Kembali  </a>
                </div>
            </div>
        </div>
    </div>
@endsection