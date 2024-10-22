<?php

namespace App\Http\Controllers;

use App\Models\Kunjin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KunjinController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang masuk
        // dd($request->all()); 
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nama_sekolah' => 'required|string|max:255',
            'nama_pic' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
        ]);

        // Simpan data ke database
        try {
            // Simpan ke database menggunakan mass assignment
            Kunjin::create($validatedData);

            // Log untuk memeriksa apakah data berhasil disimpan
            Log::info('Data Kunjin disimpan: ', $validatedData);

            // Redirect kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Pendaftaran berhasil!');
        } catch (\Exception $e) {
            // Log jika ada kesalahan
            Log::error('Error saat menyimpan Kunjin: ' . $e->getMessage());

            // Redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Pendaftaran gagal! Silakan coba lagi.');
        }
    }
}
