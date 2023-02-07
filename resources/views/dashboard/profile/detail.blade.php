@extends('layouts.dashboard')
@section('title', 'Admin | Detail Profile')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Profile</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $profile->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Berdiri</th>
                                    <td>{{ $profile->berdiri }}</td>
                                </tr>
                                <tr>
                                    <th>Pendiri</th>
                                    <td>{{ $profile->pendiri }}</td>
                                </tr>
                                <tr>
                                    <th>Pengelola</th>
                                    <td>{{ $profile->pengelola }}</td>
                                </tr>
                                <tr>
                                    <th>Image</th>
                                    <td><img src="{{ url('storage/profile', $profile->image) }}" alt="Profile" class="img img-fluid img-thumbnail" title="Profile Rumah Sakit"></td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $profile->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $profile->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('profile.index') }}" class="btn btn-warning float-end">Kembali  </a>
                </div>
            </div>
        </div>
    </div>
@endsection