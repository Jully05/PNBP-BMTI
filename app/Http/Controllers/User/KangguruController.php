<?php

namespace App\Http\Controllers\User;

use App\Models\ShowKangguru;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KangguruController extends Controller
{
    public function index() {
        $tableBookingsKangguru = ShowKangguru::all();
        $calendarBookingsKangguru = ShowKangguru::all()->map(function($bookingKangguru) {
            return [
                'id' => $bookingKangguru->id,
                'title' => $bookingKangguru->nama_kegiatan,
                'start' => $bookingKangguru->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingKangguru->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingKangguru->nama_pengguna,
                    'waktu_penggunaan' => $bookingKangguru->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showkangguru', [ 
            'tableBookingsKangguru' => $tableBookingsKangguru,
            'calendarBookingsKangguru' => $calendarBookingsKangguru
        ]);
    }
}
