<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::all();
        $title = 'Layanan Penggunaan Fasilitas Lembaga';
        return view('fasilitas', compact('buildings', 'title'));
    }
}
