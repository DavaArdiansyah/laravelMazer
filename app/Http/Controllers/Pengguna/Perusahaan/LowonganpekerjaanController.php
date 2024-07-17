<?php

namespace App\Http\Controllers\Pengguna\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LowonganpekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.perusahaan.lowongan-pekerjaan.tampil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.perusahaan.lowongan-pekerjaan.tambah');
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
    public function show(string $id)
    {
        return view('pengguna.perusahaan.lowongan-pekerjaan.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('pengguna.perusahaan.lowongan-pekerjaan.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
