<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller 
{   
    public function loginform()
    {
        // Jika sudah login, arahkan langsung ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboardadmin');
        }

        // Tampilkan form login jika belum login
        return view('auth.login'); 
    }

    public function authenticate(Request $request)
    {
        // Validasi email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Cek apakah kredensial valid
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin'); // Redirect ke halaman admin setelah login
        }
    
        // Jika gagal login, kembalikan dengan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
}
