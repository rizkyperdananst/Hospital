@extends('layouts.dashboard')
@section('title', 'Admin | Detail Berita')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Detail Data Berita</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $news->title }}</td>
                                </tr>
                                <tr>
                                    <th>Slug</th>
                                    <td>{{ $news->slug }}</td>
                                </tr>
                                <tr>
                                    <th>Thumbnail</th>
                                    <td><img src="{{ url('storage/thumbnails/' .$news->thumbnail) }}" alt="Thumbnail" class="img img-fluid rounded" width="200"></td>
                                </tr>
                                <tr>
                                    <th>News</th>
                                    <td>{!!$news->news !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('news.index') }}" class="btn btn-warning float-end">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection