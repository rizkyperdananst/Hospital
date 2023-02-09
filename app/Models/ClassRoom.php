<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_room_id', 'nama', 'biaya', 'fasilitas', 'keterangan'];

    public function NameRooms()
    {
        return $this->belongsTo(NameRoom::class, 'name_room_id');
    }
}
