<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('Departemen.index', [
    'title' => 'Departemen',
    'departemens' => Departemen::query()->latest()
        ->when($request->search, function ($query, $search) {
            return $query->where('nama_departemen', 'like', "%{$search}%")
                ->orWhere('kode_departemen', 'like', "%{$search}%")
                ->orWhere('lokasi', 'like', "%{$search}%");
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
        return view('Departemen.create', 
        ['title' => 'Tambah Departemen',]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

    'nama_departemen' => 'required|max:255',
    'kode_departemen' => 'required|max:255|unique:departemens',
    'alamat_kantor' => 'required|max:255',

], [

    'nama_departemen.required' => 'Nama Departemen tidak boleh kosong',
    'nama_departemen.max' => 'Nama Departemen maksimal 255 karakter',

    'kode_departemen.required' => 'Kode Departemen tidak boleh kosong',
    'kode_departemen.max' => 'Kode Departemen maksimal 255 karakter',
    'kode_departemen.unique' => 'Kode Departemen sudah digunakan',

    'alamat_kantor.required' => 'Alamat Kantor tidak boleh kosong',
    'alamat_kantor.max' => 'Alamat Kantor maksimal 255 karakter',

]);

Departemen::create($validated);

return to_route('Departemen.index')
    ->withSuccess('Data Departemen berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departemen $departemen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departemen $departemen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departemen $departemen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departemen $departemen)
    {
        //
    }
}
