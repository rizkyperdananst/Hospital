@extends('layouts.dashboard')
@section('title', 'Admin | Tambah Ruangan')
    
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h5>Tambah Ruangan</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name_room_id" class="form-label">Nama</label>
                                <select name="name_room_id" id="name_room_id" class="form-select @error('name_room_id') is-invalid @enderror">
                                    <option selected>---Pilih Nama Ruangan</option>
                                    @foreach ($nameRooms as $nr)
                                        <option value="{{ $nr->id }}">{{ $nr->nama }}</option>
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
                                </select>
                                @error('class_room_id')
                                    <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                                @enderror
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