<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Departemen;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::query()->latest();
        $keyword = request('keyword');

        if ($keyword) {
        $karyawans->where('nama_karyawan', 'like', '%' . $keyword . '%');
    }

        $departemen_id = request('departemen_id');

    if ($departemen_id) {
    $karyawans->where('departemen_id', $departemen_id);
    }

    return view('Karyawan.index', [
    'title' => 'Data Karyawan',

    'departemens' => Departemen::query()->latest()->get(),

    'karyawans' => $karyawans->paginate(5)->withQueryString(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Karyawan.create', [
            'title' => 'Tambah Data Karyawan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

    'nama_karyawan' => 'required|max:255',
    'jabatan' => 'required|max:255',
    'alamat' => 'required|max:255',
    'no_hp' => 'required|max:255',
    'departemen_id' => 'required|exists:departemens,id',

], [

    'nama_karyawan.required' => 'Nama Karyawan tidak boleh kosong',
    'nama_karyawan.max' => 'Nama Karyawan maksimal 255 karakter',

    'jabatan.required' => 'Jabatan tidak boleh kosong',
    'jabatan.max' => 'Jabatan maksimal 255 karakter',

    'alamat.required' => 'Alamat tidak boleh kosong',
    'alamat.max' => 'Alamat maksimal 255 karakter',

    'no_hp.required' => 'Nomor HP tidak boleh kosong',
    'no_hp.max' => 'Nomor HP maksimal 255 karakter',

    'departemen_id.required' => 'Departemen tidak boleh kosong',
    'departemen_id.exists' => 'Departemen yang dipilih tidak ditemukan',

]);

Karyawan::create($validated);

return to_route('karyawan.index')
    ->withSuccess('Data Karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return view('Karyawan.show', [
            'title' => 'Detail Data Karyawan',
            'karyawan' => $karyawan,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return view('Karyawan.edit', [
            'title' => 'Edit Data Karyawan',
            'karyawan' => $karyawan,
            'departemens' => Departemen::all(),
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validated = $request->validate([
    'nama_karyawan' => 'required|max:255',
    'jabatan' => 'required|max:255',
    'alamat' => 'required|max:255',
    'no_hp' => 'required|max:255',
    'departemen_id' => 'required|exists:departemens,id',
], [

    'nama_karyawan.required' => 'Nama Karyawan tidak boleh kosong',
    'nama_karyawan.max' => 'Nama Karyawan maksimal 255 karakter',

    'jabatan.required' => 'Jabatan tidak boleh kosong',
    'jabatan.max' => 'Jabatan maksimal 255 karakter',

    'alamat.required' => 'Alamat tidak boleh kosong',
    'alamat.max' => 'Alamat maksimal 255 karakter',

    'no_hp.required' => 'Nomor HP tidak boleh kosong',
    'no_hp.max' => 'Nomor HP maksimal 255 karakter',

    'departemen_id.required' => 'Departemen tidak boleh kosong',
    'departemen_id.exists' => 'Departemen yang dipilih tidak ditemukan',

]);

$karyawan->update($validated);

return to_route('karyawan.index')
    ->withSuccess('Data Karyawan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return to_route('karyawan.index')->withSuccess('Data Karyawan berhasil dihapus');
    }
}
