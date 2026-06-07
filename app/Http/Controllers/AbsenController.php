<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Absen.index', [
        'title' => 'Data Absen',
        'absen' => Absen::all(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Absen.create', [
        'title' => 'Tambah Data Absen'
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'nama_karyawan' => 'required|max:255',
        'tanggal' => 'required|date',
        'jam_masuk' => 'required',
        'jam_keluar' => 'required',
        'status' => 'required',
    ],
    [
    'nama_karyawan.required' => 'nama karyawan tidak boleh kosong',
    'nama_karyawan.max' => 'nama karyawan maksimal 255 karakter',

    'tanggal.required' => 'Tanggal tidak boleh kosong',
    'tanggal.date' => 'Format tanggal tidak valid',

    'jam_masuk.required' => 'Jam masuk tidak boleh kosong',

    'jam_keluar.required' => 'Jam keluar tidak boleh kosong',

    'status.required' => 'Status tidak boleh kosong',
    ]);

Absen::create($validated);

return to_route('Absen.index')
    ->withSuccess('Data absen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        return view('Absen.edit',[
            'title' => 'Edit Absen',
            'absen' => $absen,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        $validated = $request->validate([
    'nama_karyawan' => 'required|max:255',
    'tanggal' => 'required|date',
    'jam_masuk' => 'required',
    'jam_keluar' => 'required',
    'status' => 'required',
    ],
    [
    'nama_karyawan.required' => 'nama karyawan tidak boleh kosong',
    'nama_karyawan.max' => 'nama karyawan maksimal 255 karakter',

    'tanggal.required' => 'Tanggal tidak boleh kosong',
    'tanggal.date' => 'Format tanggal tidak valid',

    'jam_masuk.required' => 'Jam masuk tidak boleh kosong',

    'jam_keluar.required' => 'Jam keluar tidak boleh kosong',

    'status.required' => 'Status tidak boleh kosong',
]);

$absen->fill($validated);
return to_route('Absen.index')
    ->withSuccess('Data absen berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        $absen->delete;
        return to_route('Absen.index')->withSuccess('Data berhasil dihapus');
    }
}