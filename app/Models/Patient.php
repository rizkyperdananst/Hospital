<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'orang_tua', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'usia', 'no_kontak', 'agama', 'status', 'pendidikan', 'pekerjaan', 'room_id', 'class_room_id', 'registration_id', 'number_contact_id', 'alamat'];

    public function rooms()
    {
        return $this->belongsTo(Room::class, 'room_id', 'class_room_id');
    }

    public function registrations()
    {
        return $this->belongsTo(Registration::class, 'registration_id',);
    }
}
