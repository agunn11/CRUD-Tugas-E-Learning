<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Tampilkan semua data mahasiswa
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', compact('data'));
    }

    // Tampilkan form tambah data
    public function create()
    {
        return view('mahasiswa.create');
    }

    // Simpan data baru ke database
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan form edit data
    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('data'));
    }

    // Simpan perubahan data
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $data = Mahasiswa::findOrFail($id);
        $data->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
