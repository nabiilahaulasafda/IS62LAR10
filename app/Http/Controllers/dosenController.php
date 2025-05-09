<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan tampilan index
        return view('Dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // form tambah
        return view('Dosen.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // proses tambah
            // Validasi data
            $validated = $request->validate([
                'nidn' => 'required|unique:dosens',
                'nama' => 'required',
                'email' => 'required|email',
            ]);

            // // Simpan data ke database
            // // Dosen::create($validated);

            // // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // menampilkan detail index
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // from edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // proses update edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // proses hapus
    }
}
