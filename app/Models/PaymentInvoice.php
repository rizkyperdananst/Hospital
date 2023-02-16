<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentInvoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['patient_id', 'officer_id', 'poly_id', 'drug_id', 'name_room_id', 'class_room_id', 'doctor_id', 'tanggal_faktur', 'total_bayar', 'keterangan'];

    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function officers()
    {
        return $this->belongsTo(Officer::class, 'officer_id');
    }

    public function polies()
    {
        return $this->belongsTo(Poly::class, 'poly_id');
    }

    public function durgs()
    {
        return $this->belongsTo(Durg::class, 'drug_id');
    }

    public function nameRooms()
    {
        return $this->belongsTo(NameRoom::class, 'name_room_id');
    }

    public function classRooms()
    {
        return $this->belongsTo(ClassRoom::class, 'class_room_id');
    }
    
    public function doctors()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
