<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'birthplace' => 'required|string|max:255',
        'birthdate' => 'required|date',
        'address' => 'required|string|max:500',
        'phone' => 'required|string|max:20',
        'education_level' => 'required|string|max:100',
        'institution' => 'required|string|max:255',
        'major' => 'required|string|max:255',
        'upload_letter' => 'required|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
    ]);

    // Proses upload file jika ada
    if ($request->hasFile('upload_letter')) {
        $file = $request->file('upload_letter');
        // Buat nama file baru dengan menambahkan timestamp agar unik
        $filename = time() . '_' . $file->getClientOriginalName();
        // Simpan file ke folder "letters" di storage
        $path = $file->storeAs('letters', $filename);
        // Simpan path file ke dalam data yang divalidasi
        $validatedData['upload_letter'] = $path;
    }

    // Simpan data ke database
    try {
        Participant::create($validatedData);
        Log::info('Data participant disimpan: ', $validatedData);
        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    } catch (\Exception $e) {
        Log::error('Error saat menyimpan participant: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Pendaftaran gagal! Silakan coba lagi.');
    }
}


}
