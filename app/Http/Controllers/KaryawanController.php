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
    'title' => 'Karyawan',

    'departemens' => Departemen::query()->latest()->get(),

    'karyawans' => $karyawans->paginate(5)->withQueryString(),
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Karyawan.create', 
        ['title' => 'Tambah Karyawan',
        'departemens' => Departemen::query()->latest()->get(),
        ]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
