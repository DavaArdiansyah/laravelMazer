<?php

namespace App\Http\Controllers\Pengguna\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataLamaranController extends Controller
{
    /**
     * Display Display the latets resource.
     */
    public function latest()
    {
        return view('pengguna.perusahaan.data-lamaran.terbaru');
    }

    /**
     * Display Display the archive resource.
     */
    public function archive()
    {
        return view('pengguna.perusahaan.data-lamaran.arsip');
    }
}
