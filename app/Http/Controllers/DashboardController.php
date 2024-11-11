<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $buildings = Building::all();
        $title = 'Sistem Informasi Pelayanan';
        return view('dashboard', compact('buildings', 'title'));
    }
    // public function show(string $id)
    // {
    //     $building = Building::findOrFail($id); // Ambil gedung berdasarkan ID
    //     $title = 'Layanan Penggunaan Fasilitas Lembaga';
    //     return view('admin.buildings.show', compact('building')); // Kembali ke view show
    // }

    // // Menampilkan form edit gedung (EDIT)
    // public function edit(Building $building)
    // {
    //     return view('admin.buildings.edit', compact('building'));
    // }
}
