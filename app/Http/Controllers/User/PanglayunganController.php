<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\ShowPanglayungan;
use App\Http\Controllers\Controller;

class PanglayunganController extends Controller
{
    public function index() {
        $tableBookingsPanglayungan = ShowPanglayungan::all();
        $calendarBookingsPanglayungan = ShowPanglayungan::all()->map(function($bookingPanglayungan) {
            return [
                'id' => $bookingPanglayungan->id,
                'title' => $bookingPanglayungan->nama_kegiatan,
                'start' => $bookingPanglayungan->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingPanglayungan->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingPanglayungan->nama_pengguna,
                    'waktu_penggunaan' => $bookingPanglayungan->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showpanglayungan', [ 
            'tableBookingsPanglayungan' => $tableBookingsPanglayungan,
            'calendarBookingsPanglayungan' => $calendarBookingsPanglayungan
        ]);
    }
}
