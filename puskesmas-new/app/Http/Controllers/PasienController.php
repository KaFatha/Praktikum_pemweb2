<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_pasien = Pasien::all();
        return view('admin.pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi Input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|in:L,P',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string'
        ]);
        //menyimpan
        pasien::create($validated);
        return redirect('dashboard/pasien')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::find($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string|in:L,P',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'kel_nama' => 'required|string'
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($validated);

        return redirect('dashboard/pasien')->with('pesan', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();

        return redirect('dashboard/pasien')->with('pesan', 'Data Berhasil Dihapus');
    }
}
