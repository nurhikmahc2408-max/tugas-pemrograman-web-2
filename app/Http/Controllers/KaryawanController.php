<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('Karyawan.index', [
    'title' => 'Karyawan',
    'karyawans' => Karyawan::latest()
        ->when($request->search, function ($query, $search) {
            return $query->where('nama_karyawan', 'like', "%{$search}%")
                ->orWhere('jabatan', 'like', "%{$search}%")
                ->orWhere('alamat', 'like', "%{$search}%")
                ->orWhere('no_hp', 'like', "%{$search}%");
        })
        ->paginate(5)
        ->withQueryString(),
]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Karyawan.create', 
        ['title' => 'Tambah Karyawan',]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawan.show', 
        ['title' => 'Detail Karyawan',
        'karyawan'=> $karyawan,
        
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit',[
            'title' => 'Edit Karyawan',
            'karyawan' => $karyawan,
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
        ], [

            'nama_karyawan.required' => 'Nama Karyawan tidak boleh kosong',
            'nama_karyawan.max' => 'Nama Karyawan maximal 255 karakter',

            'jabatan.required' => 'Jabatan tidak boleh kosong',
            'jabatan.max' => 'Jabatan maximal 255 karakter',

            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.max' => 'Alamat maximal 255 karakter',

            'no_hp.required' => 'No HP tidak boleh kosong',
            'no_hp.max' => 'No HP maximal 255 karakter',

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