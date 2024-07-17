<?php

namespace App\Http\Controllers\Pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HalamanController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()) {
            $role = Auth::user()->role;

            if ($role == 'Admin') {
                return view('pengguna.admin.dashboard');
            } else if ($role == 'Perusahaan') {
                return view('pengguna.perusahaan.dashboard');
            } else if ($role == 'Alumni') {
                return view('pengguna.alumni.dashboard');
            }
        }
        return redirect()->route('auth.login');
    }
    public function dataTahunan()
    {
        $role = Auth::user()->role;

        if ($role == 'Admin') {
            return view('pengguna.admin.data-tahunan');
        } else if ($role == 'Perusahaan') {
            return view('pengguna.perusahaan.data-tahunan');
        }
        return redirect()->route('dashboard');
    }
    public function telusuriAlumni()
    {
        return view('pengguna.alumni.telusuri-alumni');
    }
    public function lamaranSaya()
    {
        return view('pengguna.alumni.lamaran-saya');
    }
    public function profil()
    {
        $role = Auth::user()->role;

        if ($role == 'Perusahaan') {
            return view('pengguna.perusahaan.profil.tampil');
        } else if ($role == 'Alumni') {
            return view('pengguna.alumni.profil.tampil');
        }
        return redirect()->route('dashboard');
    }
    public function editProfil()
    {
        $role = Auth::user()->role;

        if ($role == 'Perusahaan') {
            return view('pengguna.perusahaan.profil.edit');
        } else if ($role == 'Alumni') {
            return view('pengguna.alumni.profil.edit');
        }
        return redirect()->route('dashboard');
    }
}
