<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Durg extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['image', 'nama', 'jenis', 'harga', 'keterangan'];
}
