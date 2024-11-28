<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShowRbi;
use App\Models\Building;


class RbiController extends Controller
{
    public function index() {
        $tableBookingsRbi = ShowRbi::all();
        $calendarBookingsRbi = ShowRbi::all()->map(function($bookingRbi) {
            return [
                'id' => $bookingRbi->id,
                'title' => $bookingRbi->nama_kegiatan,
                'start' => $bookingRbi->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingRbi->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingRbi->nama_pengguna,
                    'waktu_penggunaan' => $bookingRbi->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showrbi', [ 
            'tableBookingsRbi' => $tableBookingsRbi,
            'calendarBookingsRbi' => $calendarBookingsRbi
        ]);
    }
}
