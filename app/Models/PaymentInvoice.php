<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentInvoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['patient_id', 'officer_id', 'poly_id', 'drug_id', 'name_room_id', 'class_room_id', 'doctor_id', 'tanggal_faktur', 'total_bayar', 'keterangan'];
}
