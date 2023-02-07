<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'spesialis', 'jenis_kelamin', 'biaya_dokter', 'no_telepon', 'tgl_lahir', 'jam_kerja', 'jam_pulang', 'alamat'];

}
