<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'orang_tua', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'usia', 'no_kontak', 'agama', 'status', 'pendidikan', 'pekerjaan', 'name_room_id', 'class_room_id', 'registration_id', 'number_contact_id', 'alamat', 'nurse_id', 'doctor_id'];

    public function nameRooms()
    {
        return $this->belongsTo(NameRoom::class, 'name_room_id');
    }

    public function classRooms()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id');
    }

    public function registrations()
    {
        return $this->belongsTo(Registration::class, 'registration_id',);
    }

    public function nurses()
    {
        return $this->belongsTo(Nurse::class, 'nurse_id');
    }
    
    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
