<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftaranMCU;
use App\Models\Pasien;
use App\Models\PaketMCU;

class PendaftaranMCUController extends Controller
{
    public function index()
    {
        $pendaftaran = PendaftaranMCU::with(['pasien', 'paket'])->get();
        return view('pendaftaran_mcu.index', compact('pendaftaran'));
    }

    public function create()
    {
        $pasiens = Pasien::all();
        $pakets = PaketMCU::all();
        return view('pendaftaran_mcu.create', compact('pasiens', 'pakets'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pasien_id' => 'required|exists:pasiens,id',
        //     'paket_id' => 'required|exists:paket_mcus,id',
        //     'tanggal_pendaftaran' => 'required|date',
        // ]);
        $id = $request->input('pasien_id');
        PendaftaranMCU::create([
            'pasien_id' => $id,
            'paket_id' => $request->paket_id,
            'tanggal_pendaftaran' => date('Y-m-d H:i:s'),
        ]);

        // return redirect()->back();
        return redirect()->route('pendaftaran_mcu.index')->with('success', 'Pendaftaran MCU berhasil dilakukan!');
    }

    public function laporan(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        $pendaftaran = PendaftaranMCU::with(['pasien', 'paket'])
            ->whereBetween('tanggal_pendaftaran', [$request->tanggal_mulai, $request->tanggal_selesai])
            ->get();

        return view('pendaftaran_mcu.laporan', compact('pendaftaran'));
    }
}
