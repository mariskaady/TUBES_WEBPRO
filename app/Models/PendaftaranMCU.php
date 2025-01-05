<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranMCU extends Model
{
    public $table = 'pendaftaran_mcu';
    protected $fillable = ['pasien_id', 'paket_id', 'tanggal_pendaftaran'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    public function paket()
    {
        return $this->belongsTo(PaketMCU::class);
    }
}
