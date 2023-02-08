<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name_room_id', 'class_room_id', 'biaya', 'keterangan'];

    public function NameRooms()
    {
        return $this->belongsTo(NameRoom::class, 'name_room_id');
    }

    public function ClassRooms()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id');
    }
}
