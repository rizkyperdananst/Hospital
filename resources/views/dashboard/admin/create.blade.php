@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Admin')
    
@section('content')
    <div class="row  d-flex justify-content-center">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Tambah Admin</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror">
                            @error('username')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="alert alert-danger mt-1 mb-1 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <a href="{{ route('admin.index') }}" class="btn btn-warning float-start">Kembali</a>
                            <button class="btn btn-info float-end">Tambah Admin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection