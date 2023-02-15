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
                    <form action="{{ route('paymentinvoice.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="patient_id" class="form-label">Nama Pasien</label>
                                <select name="patient_id" id="patient_id" class="form-select @error('patient_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Pasien--</option>
                                    @foreach ($patients as $p)
                                        <option value="{{ $p->name_room_id }}">{{ $p->nama }}</option>
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
                                <label for="name_room_id" class="form-label">Nama Ruangan</label>
                                <select name="name_room_id" id="name_room_id" class="form-select @error('room_id') is-invalid @enderror">
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
                                <label for="class_room_id" class="form-label">Nama Ruangan Kelas</label>
                                <select name="class_room_id" id="class_room_id" class="form-select @error('class_id') is-invalid @enderror">
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
                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" name="total_bayar" id="total_bayar" class="form-control"> 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Tambah Faktur Pembayaran</button>
                                <a href="{{ route('paymentinvoice.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    

    @push('scripts')
    {{-- JQuery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
        $('#patient_id').on('change', function() {
        var categoryID = $(this).val();
        // alert(categoryID)
        if(categoryID) {
            $.ajax({
                url: '/admin/getNameRoom/'+categoryID,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(data)
                {
                    if(data){
                        $('#name_room_id').empty();
                        $('#name_room_id').append('<option hidden>--Pilih Nama Ruangan--</option>'); 
                        $.each(data, function(key, nameRoom){
                            $('select[name="name_room_id"]').append('<option value="'+ nameRoom.id +'">' + nameRoom.nama+ '</option>');
                        });
                    } else {
                        $('#name_room_id').empty();
                    }
                }
            });
        } else {
            $('#name_room_id').empty();
        }
        });
        });
    </script>

    <script>
        $(document).ready(function() {
        $('#name_room_id').on('change', function() {
           var categoryID = $(this).val();
           if(categoryID) {
               $.ajax({
                   url: '/admin/getClassRoom/'+categoryID,
                   type: "GET",
                   data : {"_token":"{{ csrf_token() }}"},
                   dataType: "json",
                   success:function(data)
                   {
                     if(data){
                        $('#class_room_id').empty();
                        $('#class_room_id').append('<option hidden>--Pilih Kelas Ruangan--</option>'); 
                        $.each(data, function(key, classRoom){
                            $('select[name="class_room_id"]').append('<option value="'+ classRoom.id +'">' + classRoom.nama+ '</option>');
                        });
                    }else{
                        $('#class_room_id').empty();
                    }
                 }
               });
           }else{
             $('#class_room_id').empty();
           }
        });
        });
    </script>
    @endpush
@endsection