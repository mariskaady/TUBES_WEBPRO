<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaketMCU;

class PaketMCUController extends Controller
{

    public function index()
    {
        // Ambil semua data PaketMCU
        $pakets = PaketMCU::all();

        // Kirim data ke view 'paket_mcu.index'
        return view('paket_mcu.index', compact('pakets'));
        // return dd($pakets);
        // return view('paket_mcu.index',['pakets' => $pakets]);
    }

    public function show()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('paket_mcu.create');
    }

    public function store(Request $request)
    {
        // Validasi input yang diterima dari form
        $validated = $request->validate([
            'namaPaket' => 'required',
            'jenisPemeriksaan' => 'required',
            'harga' => 'required|numeric',
        ]);

        // Simpan data yang sudah divalidasi ke database
        PaketMCU::create([
            'nama_paket' => $validated['namaPaket'],
            'jenis_pemeriksaan' => $validated['jenisPemeriksaan'],
            'harga' => $validated['harga'],
        ]);
        // PaketMCU::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('paket_mcu.index')->with('success', 'Paket MCU berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Cari data paket berdasarkan ID
        $paket = PaketMCU::findOrFail($id); // Pastikan model PaketMCU ada

        // Kirim data ke view edit.blade.php
        return view('paket_mcu.edit', compact('paket'));
    }

    // public function update(Request $request, $id)
    // {
    //     // Validasi input yang diterima dari form
    //     $request->validate([
    //         'namaPaket' => 'required',
    //         'jenisPemeriksaan' => 'required',
    //         'harga' => 'required|numeric',
    //     ]);

    //     // Cari paket berdasarkan ID
    //     $paket = PaketMCU::findOrFail($id);

    //     // Update data paket dengan data yang sudah divalidasi
    //     $paket->update($validated);

    //     // Redirect ke halaman index dengan pesan sukses
    //     return redirect()->route('paket_mcu.index')->with('success', 'Paket MCU berhasil diperbarui!');
    // }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'namaPaket' => 'required|string|max:255',
        'jenisPemeriksaan' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
    ]);

    // Update data di database
    $paket = PaketMCU::findOrFail($id);
    $paket->update([
        'nama_paket' => $validated['namaPaket'],
        'jenis_pemeriksaan' => $validated['jenisPemeriksaan'],
        'harga' => $validated['harga'],
    ]);

    return redirect()->route('paket_mcu.index')->with('success', 'Paket MCU berhasil diperbarui!');
}

    public function destroy($id)
    {
        // Cari paket berdasarkan ID
        $paket = PaketMCU::findOrFail($id);

        // Hapus paket
        $paket->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('paket_mcu.index')->with('success', 'Paket MCU berhasil dihapus!');
    }
}
