@extends('layouts.dashboard')
@section('title', 'Admin | Edit Pasien')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Pasien</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('patient.update', $patient->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" value="{{ $patient->nama }}" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="orang_tua" class="form-label">Nama Orang Tua</label>
                                <input type="text" name="orang_tua" value="{{ $patient->orang_tua }}" id="orang_tua" class="form-control @error('orang_tua') is-invalid @enderror">
                                @error('orang_tua')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{ $patient->tempat_lahir }}" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">
                                @error('tempat_lahir')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $patient->tanggal_lahir }}" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                @error('tanggal_lahir')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example">
                                    <option selected hidden>Pilih Jenis Kelamin</option>
                                    @foreach ($genders as $gender)
                                        @if ($patient->jenis_kelamin == $gender)
                                            <option value="{{ $gender }}" selected>{{ $gender }}</option>
                                        @else
                                            <option value="{{ $gender }}">{{ $gender }}</option>
                                        @endif
                                    @endforeach
                                  </select>
                                  @error('jenis_kelamin')
                                      <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="usia" class="form-label">Usia</label>
                                <input type="number" name="usia" value="{{ $patient->usia }}" id="usia" class="form-control @error('usia') is-invalid @enderror">
                                @error('usia')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="no_kontak" class="form-label">Nomor Kontak</label>
                                <input type="number" name="no_kontak" value="{{ $patient->no_kontak }}" id="no_kontak" class="form-control @error('no_kontak') is-invalid @enderror">
                                @error('no_kontak')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" id="agama" class="form-select @error('agama') is-invalid @enderror">
                                    <option selected hidden>--Pilih Agama--</option>
                                    @foreach ($religions as $r)
                                        @if ($patient->agama == $r)
                                            <option value="{{ $r }}" selected>{{ $r }}</option>
                                        @else
                                            <option value="{{ $r }}">{{ $r }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('agama')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select @error('status') is-invalid @enderror">
                                    <option selected hidden>--Pilih Status---</option>
                                    @foreach ($statuses as $s)
                                        @if ($patient->status == $s)
                                            <option value="{{ $s }}" selected>{{ $s }}</option>
                                        @else
                                            <option value="{{ $s }}">{{ $s }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <select name="pendidikan" id="pendidikan" class="form-select @error('pendidikan') is-invalid @enderror">
                                    <option selected hidden>--Pilih Pendidikan--</option>
                                    @foreach ($educations as $e)
                                        @if ($patient->pendidikan = $e)
                                            <option value="{{ $e }}" selected>{{ $e }}</option>
                                        @else
                                            <option value="{{ $e }}">{{ $e }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('pendidikan')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" name="pekerjaan" value="{{ $patient->pekerjaan }}" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
                                @error('pekerjaan')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="name_room_id" class="form-label">Nama Ruangan</label>
                                <select name="name_room_id" id="name_room_id" class="form-select @error('name_room_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Ruangan</option>
                                    @foreach ($nameRooms as $nr)
                                        @if ($patient->name_room_id == $nr->id)
                                            <option value="{{ $nr->id }}" selected>{{ $nr->nama }}</option>
                                        @else
                                            <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('berat_badan')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="class_room_id" class="form-label">Ruangan Kelas</label>
                                <select name="class_room_id" id="class_room_id" class="form-select @error('class_room_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Ruangan Kelas--</option>
                                    @foreach ($classRoom as $cr)
                                        @if ($patient->class_room_id == $cr->id)
                                            <option value="{{ $cr->id }}" selected>{{ $cr->nama }}</option>
                                        @else
                                            <option value="{{ $cr->id }}">{{ $cr->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('class_room_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="registration_id" class="form-label">Nama Penanggung Jawab</label>
                                <select name="registration_id" id="registration_id" class="form-select @error('registration_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Nama Penanggung Jawab--</option>
                                    @foreach ($registrations as $r)
                                        @if ($patient->registration_id == $r->id)
                                            <option value="{{ $r->id }}" selected>{{ $r->nama }}</option>
                                        @else
                                            <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('registration_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nurse_id" class="form-label">Perawat</label>
                                <select name="nurse_id" id="nurse_id" class="form-select @error('nurse_id') is-invaid @enderror">
                                    <option selected hidden>--Pilih Perawat--</option>
                                    @foreach ($nurses as $n)
                                        @if ($patient->nurse_id == $n->id)
                                            <option value="{{ $n->id }}" selected>{{ $n->nama }}</option>
                                        @else
                                            <option value="{{ $n->id }}">{{ $n->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('nurse_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="doctor_id" class="form-label">Dokter</label>
                                <select name="doctor_id" id="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror">
                                    <option selected hidden>--Pilih Dokter---</option>
                                    @foreach ($doctors as $d)
                                        @if ($patient->doctor_id == $d->id)
                                            <option value="{{ $d->id }}" selected>{{ $d->nama }}</option>
                                        @else
                                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" cols="30" rows="5">{{ $patient->alamat }}</textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Pasien</button>
                                <a href="{{ route('patient.index') }}" class="btn btn-warning float-end">Kembali</a>
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