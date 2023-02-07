<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Officer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'gaji', 'shift', 'jenis_kelamin', 'jam_kerja', 'jam_pulang', 'alamat'];

}
