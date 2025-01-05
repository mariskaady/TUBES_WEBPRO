<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketMCU extends Model
{
    // use HasFactory;
    protected $table = 'paket_mcu'; // Sesuaikan nama tabel jika perlu

    // Kolom yang dapat diisi secara massal (optional)
    protected $fillable = ['namaPaket', 'jenisPemeriksaan', 'harga'];

    public function pendaftaran()
    {
        return $this->hasMany(PendaftaranMCU::class);
    }

}
