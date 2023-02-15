@extends('layouts.dashboard')
@section('title', 'Admin | Profile')
    
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
                <h5>Profile Rumah Sakit</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Berdiri</th>
                                <th>Pendiri</th>
                                <th>Pengelola</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $profile->nama }}</td>
                                <td>{{ $profile->berdiri }}</td>
                                <td>{{ $profile->pendiri }}</td>
                                <td>{{ $profile->pengelola }}</td>
                                <td>
                                    <a href="{{ route('profile.edit', $profile->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection