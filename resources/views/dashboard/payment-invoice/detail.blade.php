@extends('layouts.dashboard')
@section('title', 'Admin | Detail Faktur Pembayaran')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Data Faktur Pembayaran</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama Pasien</th>
                                    <td>{{ $pi->patients->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Petugas</th>
                                    <td>{{ $pi->officers->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Poli</th>
                                    <td>{{ $pi->polies->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Obat</th>
                                    <td>{{ $pi->durgs->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ruangan</th>
                                    <td>{{ $pi->nameRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Kelas Ruangan</th>
                                    <td>{{ $pi->classRooms->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Dokter</th>
                                    <td>{{ $pi->doctors->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Faktur Pembayaran</th>
                                    <td>{{ $pi->tanggal_faktur }}</td>
                                </tr>
                                <tr>
                                    <th>Total Bayar</th>
                                    <td>{{ $pi->classRooms->biaya + $pi->durgs->harga }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $pi->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('paymentinvoice.index') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection