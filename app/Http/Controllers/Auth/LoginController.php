<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        if (!Auth::user()) {
            return view('components.auth.login');
        }
        return redirect()->back();
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak terdaftar pada aplikasi.');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('error', 'Password yang anda masukan salah.');
        }

        Auth::login($user);

        // AktivitasUser::create([
        //     'id_user' => Auth::id(),
        //     'keterangan' => 'Pengguna berhasil masuk aplikasi'
        // ]);

        return redirect()->route('dashboard');
    }
    public function logout()
    {
        $user = Auth::user();

        // AktivitasPengguna::create([
        //     'id_user' => $user->id,
        //     'keterangan' => 'Pengguna berhasil masuk'
        // ]);

        Auth::logout();

        return redirect()->route('auth.login');
    }
}
