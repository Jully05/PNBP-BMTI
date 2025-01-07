<?php

namespace App\Http\Controllers\User;

use App\Models\ShowBinangkit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BinangkitController extends Controller
{
    public function index() {
        $tableBookingsBinangkit = ShowBinangkit::all();
        $calendarBookingsBinangkit = ShowBinangkit::all()->map(function($bookingBinangkit) {
            return [
                'id' => $bookingBinangkit->id,
                'title' => $bookingBinangkit->nama_kegiatan,
                'start' => $bookingBinangkit->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingBinangkit->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingBinangkit->nama_pengguna,
                    'waktu_penggunaan' => $bookingBinangkit->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showbinangkit', [ 
            'tableBookingsBinangkit' => $tableBookingsBinangkit,
            'calendarBookingsBinangkit' => $calendarBookingsBinangkit
        ]);
    }
}
