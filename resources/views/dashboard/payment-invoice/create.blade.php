@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Faktur Pembayaran')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <h5>Tambah Faktur Pembayaran</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="patient_id" class="form-label">Nama Pasien</label>
                            <select name="patient_id" id="patient_id" class="form-select @error('patient_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Pasien--</option>
                                @foreach ($patients as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                            @error('patient_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="officer_id" class="form-label">Petugas</label>
                            <select name="officer_id" id="officer_id" class="form-select @error('officer_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Petugas--</option>
                                @foreach ($officers as $o)
                                    <option value="{{ $o->id }}">{{ $o->nama }}</option>
                                @endforeach
                            </select>
                            @error('officer_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="poly_id" class="form-label">Nama Poli</label>
                            <select name="poly_id" id="poly_id" class="form-select @error('poly_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Poli--</option>
                                @foreach ($polies as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                @endforeach
                            </select>
                            @error('poly_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="drug_id" class="form-label">Obat</label>
                            <select name="drug_id" id="drug_id" class="form-select @error('drug_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Obat--</option>
                            </select>
                            @error('drug_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="room_id" class="form-label">Nama Ruangan</label>
                            <select name="room_id" id="room_id" class="form-select @error('room_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Nama Ruangan--</option>
                                @foreach ($nameRooms as $nr)
                                    <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
                                @endforeach
                            </select>
                            @error('room_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="class_id" class="form-label">Nama Ruangan Kelas</label>
                            <select name="class_id" id="class_id" class="form-select @error('class_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Nama Ruangan Kelas--</option>
                                @foreach ($classRooms as $cr)
                                    <option value="{{ $cr->id }}">{{ $cr->nama }}</option>
                                @endforeach
                            </select>
                            @error('class_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="doctor_id" class="form-label">Dokter</label>
                            <select name="doctor_id" id="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror">
                                <option selected hidden>--Pilih Dokter--</option>
                                @foreach ($doctors as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                @endforeach
                            </select>
                            @error('doctor_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_faktur" class="form-label">Tanggal</label>
                            <input type="date" name="tanggal_faktur" id="tanggal_faktur" class="form-control @error('tanggal_faktur') is-invalid @enderror">
                            @error('tanggal_faktur')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
                            <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control @error('jumlah_bayar') is-invalid @enderror">
                            @error('jumlah_bayar')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    

@push('script')
    
@endpush
@endsection