<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    // Menampilkan daftar petugas
    public function index()
    {
        $petugas = Petugas::all(); // Mengambil semua data petugas dari database
        return view('petugas.index', compact('petugas'));
    }

    // Menampilkan form untuk menambah petugas baru
    public function create()
    {
        return view('petugas.create');
    }

    // Menyimpan petugas baru ke database
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email',
            'jabatan' => 'required|string|max:255',
        ]);

        // Menyimpan data petugas baru ke database
        Petugas::create($validated);

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit petugas
    public function edit($id)
    {
        $petugas = Petugas::findOrFail($id); // Mencari petugas berdasarkan ID
        return view('petugas.edit', compact('petugas'));
    }

    // Mengupdate data petugas di database
    public function update(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id); // Mencari petugas berdasarkan ID

        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:petugas,email,' . $petugas->id,
            'jabatan' => 'required|string|max:255',
        ]);

        // Mengupdate data petugas
        $petugas->update($validated);

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil diperbarui!');
    }

    // Menghapus petugas dari database
    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id); // Mencari petugas berdasarkan ID
        $petugas->delete(); // Menghapus petugas

        return redirect()->route('petugas.index')->with('success', 'Petugas berhasil dihapus!');
    }
}
