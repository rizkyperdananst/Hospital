@extends('layouts.dashboard')
@section('title', 'Admin | Faktur Pembayaran')
    
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
                <h5>Data Faktur Pembayaran</h5>
                <a href="{{ route('paymentinvoice.create') }}" class="btn btn-info">Tambah Faktur Pembayaran</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Ruangan</th>
                                <th>Kelas Ruangan</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Pasien</th>
                                <th>Nama Ruangan</th>
                                <th>Kelas Ruangan</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($paymentInvoices as $pi)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pi->patients->nama }}</td>
                                <td>{{ $pi->nameRooms->nama }}</td>
                                <td>{{ $pi->classRooms->nama }}</td>
                                <td>{{ $pi->doctors->nama }}</td>
                                <td>{{ $pi->tanggal_faktur }}</td>
                                <td width="13%"> 
                                    <a href="{{ route('paymentinvoice.show', $pi->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('paymentinvoice.destroy', $pi->id) }}" method="POST" class="d-inline">
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