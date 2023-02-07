@extends('layouts.dashboard')
@section('title', 'Admin | Data Ruangan')
    
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
<div class="row mb-3">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h5>Data Ruangan</h5>
                <a href="{{ route('room.create') }}" class="btn btn-info">Tambah Ruangan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Biaya</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Biaya</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($rooms as $r)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $r->NameRooms->nama }}</td>
                                <td>{{ $r->ClassRooms->nama }}</td>
                                <td>{{ $r->biaya }}</td>
                                <td>{{ $r->keterangan }}</td>
                                <td>
                                    <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="" method="POST" class="d-inline">
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