@extends('layouts.dashboard')
@section('title', 'Admin | Edit Ruangan')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Edit Ruangan</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('room.update', $room->id) }}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name_room_id" class="form-label">Nama</label>
                                <select name="name_room_id" id="name_room_id" class="form-select @error('name_room_id') is-invalid @enderror">
                                    <option selected>---Pilih Nama Ruangan</option>
                                    @foreach ($nameRooms as $nr)
                                        @if ($room->name_room_id == $nr->id)
                                            <option value="{{ $nr->id }}" selected>{{ $nr->nama }}</option>
                                        @else
                                            <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('name_room_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="class_room_id" class="form-label">Kelas</label>
                                <select name="class_room_id" id="class_room_id" class="form-select @error('class_room_id') is-invalid @enderror">
                                    <option selected>---Pilih Kelas---</option>
                                    @foreach ($classRooms as $cr)
                                        @if ($room->class_room_id == $cr->id)
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
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="biaya" class="form-label">Biaya</label>
                                <input type="number" name="biaya" value="{{ $room->biaya }}" id="biaya" class="form-control @error('biaya') is-invalid @enderror">
                                @error('biaya')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="30" rows="5" class="form-control @error('keterangan') is-invalid @enderror">{{ $room->keterangan }}</textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <button class="btn btn-info float-end ms-3">Edit Ruangan</button>
                                <a href="{{ route('room.index') }}" class="btn btn-warning float-end">Kembali</a>
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
                        $('#class_room_id').append('<option hidden>--Pilih Anggota Jemaat--</option>'); 
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