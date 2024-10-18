<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'nomor_telepon',
        'usia',
        'email',
        'nik',
        'jenis_poli',
        'keluhan',
        'tanggal_kunjungan',
        'jam_kunjungan',
        'pilihan_dokter',
    ];
}