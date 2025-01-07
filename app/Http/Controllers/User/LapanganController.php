<?php

namespace App\Http\Controllers\User;

use App\Models\ShowLapangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LapanganController extends Controller
{
    public function index() {
        $tableBookingsLapangan = ShowLapangan::all();
        $calendarBookingsLapangan = ShowLapangan::all()->map(function($bookingLapangan) {
            return [
                'id' => $bookingLapangan->id,
                'title' => $bookingLapangan->nama_kegiatan,
                'start' => $bookingLapangan->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingLapangan->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingLapangan->nama_pengguna,
                    'waktu_penggunaan' => $bookingLapangan->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showlapangan', [ 
            'tableBookingsLapangan' => $tableBookingsLapangan,
            'calendarBookingsLapangan' => $calendarBookingsLapangan
        ]);
    }
}
