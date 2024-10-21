<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = 'permohonans';

    protected $fillable = [
        'nama',
        'nip',
        'pangkat_gol',
        'jabatan',
        'unit_kerja',
        'alamat',
        'no_hp',
        'tanggal_mulai',
        'tanggal_selesai',
        'alasan',
    ];
}

