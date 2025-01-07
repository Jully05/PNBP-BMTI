<?php

namespace App\Http\Controllers\User;

use App\Models\ShowKolam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KolamController extends Controller
{
    public function index() {
        $tableBookingsKolam = ShowKolam::all();
        $calendarBookingsKolam = ShowKolam::all()->map(function($bookingKolam) {
            return [
                'id' => $bookingKolam->id,
                'title' => $bookingKolam->nama_kegiatan,
                'start' => $bookingKolam->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingKolam->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingKolam->nama_pengguna,
                    'waktu_penggunaan' => $bookingKolam->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showk', [ 
            'tableBookingsKolam' => $tableBookingsKolam,
            'calendarBookingsKolam' => $calendarBookingsKolam
        ]);
    }
}
