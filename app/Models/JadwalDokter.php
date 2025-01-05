<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalDokter extends Model
{
    use HasFactory;

    // Tabel yang digunakan oleh model ini
    protected $table = 'jadwal_dokters';

    // Kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'nama_dokter',
        'spesialis',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];
}
