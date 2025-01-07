<?php

namespace App\Http\Controllers\User;

use App\Models\ShowPancaniti;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PancanitiController extends Controller
{
    public function index() {
        $tableBookingsPancaniti = ShowPancaniti::all();
        $calendarBookingsPancaniti = ShowPancaniti::all()->map(function($bookingPancaniti) {
            return [
                'id' => $bookingPancaniti->id,
                'title' => $bookingPancaniti->nama_kegiatan,
                'start' => $bookingPancaniti->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingPancaniti->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingPancaniti->nama_pengguna,
                    'waktu_penggunaan' => $bookingPancaniti->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showpancaniti', [ 
            'tableBookingsPancaniti' => $tableBookingsPancaniti,
            'calendarBookingsPancaniti' => $calendarBookingsPancaniti
        ]);
    }
}
