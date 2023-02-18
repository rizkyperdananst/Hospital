@extends('layouts.dashboard')
@section('title', 'Admin | Edit Berita')
    
@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ url('assets/library/summernote/summernote-bs4.min.css') }}">
    @endpush

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Berita</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $news->title }}" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Input title">
                                @error('title')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" name="thumbnail" id="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror">
                                @error('thumbnail')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="news" class="form-label">News</label>
                                <label for="news">Berita</label>
                                <textarea name="news" id="news" rows="4" class="form-control @error('news') is-invalid @enderror">{{ $news->news }}</textarea>
                                @error('news')
                                <div class="alert alert-danger mt-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Berita</button>
                                <a href="{{ route('news.index') }}" class="btn btn-warning float-end">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ url('assets/library/summernote/summernote-bs4.min.js') }}"></script>
    <script>
      $('#news').summernote({
        placeholder: 'Input berita hari ini',
        height: 200
      });
    </script>
    @endpush
@endsection