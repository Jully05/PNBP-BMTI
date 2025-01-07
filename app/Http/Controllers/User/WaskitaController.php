<?php

namespace App\Http\Controllers\User;

use App\Models\ShowWaskita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WaskitaController extends Controller
{
    public function index() {
        $tableBookingsWaskita = ShowWaskita::all();
        $calendarBookingsWaskita = ShowWaskita::all()->map(function($bookingWaskita) {
            return [
                'id' => $bookingWaskita->id,
                'title' => $bookingWaskita->nama_kegiatan,
                'start' => $bookingWaskita->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingWaskita->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingWaskita->nama_pengguna,
                    'waktu_penggunaan' => $bookingWaskita->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('user.showwaskita', [ 
            'tableBookingsWaskita' => $tableBookingsWaskita,
            'calendarBookingsWaskita' => $calendarBookingsWaskita
        ]);
    }
}
