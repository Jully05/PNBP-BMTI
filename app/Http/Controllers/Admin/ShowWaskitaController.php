<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShowWaskita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowWaskitaController extends Controller
{
       // Menampilkan daftar booking Show Waskita==============================================================
        public function index() {
        $tableBookingsWaskita = ShowWaskita::all();
        $calendarBookingsWaskita = ShowWaskita::all()->map(function($bookingwaskita) {
            return [
                'id' => $bookingwaskita->id,
                'title' => $bookingwaskita->nama_kegiatan,
                'start' => $bookingwaskita->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingwaskita->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingwaskita->nama_pengguna,
                    'waktu_penggunaan' => $bookingwaskita->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showwaskita.index', [ 
            'tableBookingsWaskita' => $tableBookingsWaskita,
            'calendarBookingsWaskita' => $calendarBookingsWaskita
        ]);

    }

    // Menampilkan halaman pembuatan booking Show Waskita
    public function create() {
        return view('admin.showwaskita.create'); 
    }

    // Menyimpan booking Show waskita ke dalam database
    public function list(Request $request) {
        $rules = [
            'nama_pengguna' => 'required|min:3',
            'nama_kegiatan' => 'required|min:3',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'waktu_penggunaan' => 'required|regex:/^([0-9]{1,2}):[0-5][0-9] - ([0-9]{1,2}):[0-5][0-9]$/',
        ];

        // Validasi dan penyimpanan data
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('showwaskita.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showwaskita = new ShowWaskita();
        $showwaskita->nama_pengguna = $request->nama_pengguna; 
        $showwaskita->nama_kegiatan = $request->nama_kegiatan;
        $showwaskita->tanggal_mulai = $request->tanggal_mulai; 
        $showwaskita->tanggal_selesai = $request->tanggal_selesai; 
        $showwaskita->waktu_penggunaan = $request->waktu_penggunaan; 
        $showwaskita->save();

        return redirect()->route('showwaskita.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking Show waskita
    public function update($id, Request $request) {
        $showwaskita = ShowWaskita::findOrFail($id);

        $rules = [
            'nama_pengguna' => 'required|min:3', 
            'nama_kegiatan' => 'required|min:3',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'waktu_penggunaan' => 'required|regex:/^([0-9]{1,2}):[0-5][0-9] - ([0-9]{1,2}):[0-5][0-9]$/',
        ];

        // Validasi dan pembaruan data
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->route('showwaskita.edit', $showwaskita->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showwaskita->nama_pengguna = $request->nama_pengguna; 
        $showwaskita->nama_kegiatan = $request->nama_kegiatan;
        $showwaskita->tanggal_mulai = $request->tanggal_mulai; 
        $showwaskita->tanggal_selesai = $request->tanggal_selesai;
        $showwaskita->waktu_penggunaan = $request->waktu_penggunaan; 
        $showwaskita->save();

        return redirect()->route('showwaskita.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking Show waskita
    public function edit($id) {
        $showwaskita = ShowWaskita::findOrFail($id);
        return view('admin.showwaskita.edit', compact('showwaskita'));
    }

    // Menghapus booking Showwaskita
    public function destroy($id) {
        $showwaskita = ShowWaskita::findOrFail($id);
        $showwaskita->delete();
        return redirect()->route('showwaskita.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
