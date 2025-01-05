<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dokter dari database (contoh menggunakan Eloquent)
        $dokters = [
            ['nama' => 'Dr. Andi', 'spesialis' => 'Kardiologi', 'hari' => 'Senin, Rabu, Jumat', 'jam' => '08:00 - 12:00'],
            ['nama' => 'Dr. Budi', 'spesialis' => 'Pediatri', 'hari' => 'Selasa, Kamis', 'jam' => '09:00 - 13:00']
        ];

        return view('jadwal_dokter.index', compact('dokters'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form tambah jadwal dokter
        return view('jadwal_dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'hari' => 'required|string',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Simpan data ke database
        JadwalDokter::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JadwalDokter $jadwalDokter)
    {
        // Menampilkan detail jadwal dokter
        return view('jadwal_dokter.show', compact('jadwalDokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JadwalDokter $jadwalDokter)
    {
        // Menampilkan form edit jadwal dokter
        return view('jadwal_dokter.edit', compact('jadwalDokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JadwalDokter $jadwalDokter)
    {
        // Validasi input
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'spesialis' => 'required|string|max:255',
            'hari' => 'required|string',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        // Update data di database
        $jadwalDokter->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JadwalDokter $jadwalDokter)
    {
        // Hapus data dari database
        $jadwalDokter->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('jadwal_dokter.index')->with('success', 'Jadwal dokter berhasil dihapus.');
    }
    public function anak()
    {
        // Mengambil data dokter spesialis Anak dari database
        $dokters = JadwalDokter::where('spesialis', 'Anak')->get();

        // Mengirim data ke view yang sesuai
        return view('jadwal_dokter.anak', compact('dokters'));
    }

    public function penyakitDalam()
    {
        $dokters = JadwalDokter::where('spesialis', 'Penyakit Dalam')->get();
        return view('jadwal_dokter.penyakit_dalam', compact('dokters'));
    }

    public function jantung()
    {
        $dokters = JadwalDokter::where('spesialis', 'Jantung & Pembuluh Darah')->get();
        return view('jadwal_dokter.jantung', compact('dokters'));
    }

    public function umum()
    {
        $dokters = JadwalDokter::where('spesialis', 'Umum')->get();
        return view('jadwal_dokter.umum', compact('dokters'));
    }

    public function paru()
    {
        $dokters = JadwalDokter::where('spesialis', 'Paru')->get();
        return view('jadwal_dokter.paru', compact('dokters'));
    }

    public function jiwa()
    {
        $dokters = JadwalDokter::where('spesialis', 'Kedokteran Jiwa')->get();
        return view('jadwal_dokter.jiwa', compact('dokters'));
    }
}
