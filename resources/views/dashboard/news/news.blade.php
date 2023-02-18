@extends('layouts.dashboard')
@section('title', 'Admin | Data Berita')
    
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
                <h5>Data Berita</h5>
                <a href="{{ route('news.create') }}" class="btn btn-info">Tambah Berita</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Thumbnail</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no= 1;
                            @endphp
                            @foreach ($newses as $news)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $news->title }}</td>
                                <td>{{ $news->slug }}</td>
                                <td><img src="{{ url('storage/thumbnails/' .$news->thumbnail) }}" alt="Thumbnail" class="img img-fluid rounded" width="100"></td>
                                <td width="16%">
                                    <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('news.show', $news->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                    <form action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline">
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