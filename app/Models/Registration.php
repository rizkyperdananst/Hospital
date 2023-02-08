<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registration extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['no_registrasi', 'nama', 'officer_id', 'no_kontak', 'hubungan_dengan_pasien', 'tanggal_registrasi', 'alamat'];

    public function officers()
    {
        return $this->belongsTo(Officer::class, 'officer_id');
    }
}
