<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShowLapangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowLapanganController extends Controller
{
       // Menampilkan daftar booking ShowLapangan==============================================================
        public function index() {
        $tableBookingsLapangan = ShowLapangan::all();
        $calendarBookingsLapangan = ShowLapangan::all()->map(function($bookinglapangan) {
            return [
                'id' => $bookinglapangan->id,
                'title' => $bookinglapangan->nama_kegiatan,
                'start' => $bookinglapangan->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookinglapangan->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookinglapangan->nama_pengguna,
                    'waktu_penggunaan' => $bookinglapangan->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showlapangan.index', [ 
            'tableBookingsLapangan' => $tableBookingsLapangan,
            'calendarBookingsLapangan' => $calendarBookingsLapangan
        ]);

    }

    // Menampilkan halaman pembuatan booking Show Lapangan
    public function create() {
        return view('admin.showlapangan.create'); 
    }

    // Menyimpan booking Show Lapangan ke dalam database
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
            return redirect()->route('showlapangan.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showlapangan = new ShowLapangan();
        $showlapangan->nama_pengguna = $request->nama_pengguna; 
        $showlapangan->nama_kegiatan = $request->nama_kegiatan;
        $showlapangan->tanggal_mulai = $request->tanggal_mulai; 
        $showlapangan->tanggal_selesai = $request->tanggal_selesai; 
        $showlapangan->waktu_penggunaan = $request->waktu_penggunaan; 
        $showlapangan->save();

        return redirect()->route('showlapangan.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking Show Lapangan
    public function update($id, Request $request) {
        $showlapangan = ShowLapangan::findOrFail($id);

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
            return redirect()->route('showlapangan.edit', $showlapangan->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showlapangan->nama_pengguna = $request->nama_pengguna; 
        $showlapangan->nama_kegiatan = $request->nama_kegiatan;
        $showlapangan->tanggal_mulai = $request->tanggal_mulai; 
        $showlapangan->tanggal_selesai = $request->tanggal_selesai;
        $showlapangan->waktu_penggunaan = $request->waktu_penggunaan; 
        $showlapangan->save();

        return redirect()->route('showlapangan.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking Show Lapangan
    public function edit($id) {
        $showlapangan = ShowLapangan::findOrFail($id);
        return view('admin.showlapangan.edit', compact('showlapangan'));
    }

    // Menghapus booking Show Lapangan
    public function destroy($id) {
        $showlapangan = ShowLapangan::findOrFail($id);
        $showlapangan->delete();
        return redirect()->route('showlapangan.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
