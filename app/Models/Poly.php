<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poly extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat'];
}
