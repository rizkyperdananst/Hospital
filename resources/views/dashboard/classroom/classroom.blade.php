@extends('layouts.dashboard')
@section('title', 'Admin | Data Kelas Ruangan')
 
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
                <h5>Data Kelas Ruangan</h5>
                <a href="{{ route('classroom.create') }}" class="btn btn-info">Tambah Kelas Ruangan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Kelas Ruangan</th>
                                <th>Biaya</th>
                                <th>Fasilitas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Kelas Ruangan</th>
                                <th>Biaya</th>
                                <th>Fasilitas</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($classRooms as $cr)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $cr->nameRooms->nama }}</td>
                                <td>{{ $cr->nama }}</td>
                                <td>{{ $cr->biaya }}</td>
                                <td>{{ $cr->fasilitas }}</td>
                                <td>
                                    <a href="{{ route('classroom.edit', $cr->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('classroom.show', $cr->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('classroom.destroy', $cr->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
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