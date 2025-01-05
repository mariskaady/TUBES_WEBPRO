<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMCU;
class MCUPasienController extends Controller
{
    public function showDiabetes()
    {
        return view('mcu_pasien.diabetes');
    }

    public function showThorax(Request $request)
    {

        return view('mcu_pasien.thorax');
    }

    public function showAbdomen(Request $request)
    {

        return view('mcu_pasien.abdomen');
    }

    public function showTBC()
    {
        return view('mcu_pasien.TBC');
    }

    public function showSkoliosis()
    {

        return view('mcu_pasien.Skoliosis');
    }
}
