<?php

namespace App\Http\Controllers\Pengguna\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LowonganpekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.alumni.lowongan-pekerjaan.tampil');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('pengguna.alumni.lowongan-pekerjaan.detail');
    }
}
