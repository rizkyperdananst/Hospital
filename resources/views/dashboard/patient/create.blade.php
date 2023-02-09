@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Pasien')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Tambah Pasien</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('patient.store') }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="orang_tua" class="form-label">Nama Orang Tua</label>
                                <input type="text" name="orang_tua" id="orang_tua" class="form-control @error('orang_tua') is-invalid @enderror">
                                @error('orang_tua')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">
                                @error('tempat_lahir')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" id="tgk_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-select @error('jenis_kelamin') is-invalid @enderror" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    @foreach ($genders as $gender)
                                        <option value="{{ $gender }}">{{ $gender }}</option>
                                    @endforeach
                                  </select>
                                  @error('jenis_kelamin')
                                      <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                  @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="usia" class="form-label">Usia</label>
                                <input type="number" name="usia" id="usia" class="form-control @error('usia') is-invalid @enderror">
                                @error('usia')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="no_kontak" class="form-label">Nomor Kontak</label>
                                <input type="number" name="no_kontak" id="no_kontak" class="form-control @error('no_kontak') is-invalid @enderror">
                                @error('no_kontak')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="agama" class="form-label">Agama</label>
                                <select name="agama" id="agama" class="form-select @error('agama') is-invalid @enderror">
                                    <option selected>--Pilih Agama--</option>
                                    @foreach ($religions as $r)
                                        <option value="{{ $r }}">{{ $r }}</option>
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
                                    <option selected>--Pilih Status---</option>
                                    @foreach ($statuses as $s)
                                        <option value="{{ $s }}">{{ $s }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="pendidikan" class="form-label">Pendidikan</label>
                                <select name="pendidikan" id="pendidikan" class="form-select @error('pendidikan') is-invalid @enderror">
                                    <option selected>--Pilih Pendidikan--</option>
                                    @foreach ($educations as $e)
                                        <option value="{{ $e }}">{{ $e }}</option>
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
                                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror">
                                @error('pekerjaan')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="room_id" class="form-label">Ruangan</label>
                                <select name="room_id" id="room_id" class="form-select @error('room_id') is-invalid @enderror">
                                    <option selected>--Pilih Ruangan</option>
                                    @foreach ($rooms as $r)
                                        <option value="{{ $r->id }}">{{ $r->rooms }}</option>
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
                                    <option selected>--Pilih Ruangan Kelas--</option>
                                </select>
                                @error('class_room_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="registration_id" class="form-label">Nama Penanggung Jawab</label>
                                <select name="registration_id" id="registration_id" class="form-select @error('registration_id') is-invalid @enderror">
                                    <option selected>--Pilih Nama Penanggung Jawab--</option>
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
                                    <option selected>--Pilih Perawat--</option>
                                    @foreach ($nurses as $n)
                                        <option value="{{ $n->id }}">{{ $n->nama }}</option>
                                    @endforeach
                                </select>
                                @error('nurse_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="doctor_id" class="form-label">Dokter</label>
                                <select name="doctor_id" id="doctor_id" class="form-select @error('doctor_id') is-invalid @enderror">
                                    <option selected>--Pilih Dokter---</option>
                                    @foreach ($doctors as $d)
                                        <option value="{{ $d->id }}">{{ $d->nama }}</option>
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
                                <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" cols="30" rows="5"></textarea>
                                @error('alamat')
                                    <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                           
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Tambah Pasien</button>
                                <a href="{{ route('patient.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection