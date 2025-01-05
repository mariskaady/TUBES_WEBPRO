<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = ['nama', 'alamat', 'status'];

    public function pendaftaran()
    {
        return $this->hasMany(PendaftaranMCU::class);
    }
}
