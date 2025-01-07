<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShowKolam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowKolamController extends Controller
{
       // Menampilkan daftar booking ShowKolam==============================================================
        public function index() {
        $tableBookingsKolam = ShowKolam::all();
        $calendarBookingsKolam = ShowKolam::all()->map(function($bookingkolam) {
            return [
                'id' => $bookingkolam->id,
                'title' => $bookingkolam->nama_kegiatan,
                'start' => $bookingkolam->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingkolam->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingkolam->nama_pengguna,
                    'waktu_penggunaan' => $bookingkolam->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showk.index', [ 
            'tableBookingsKolam' => $tableBookingsKolam,
            'calendarBookingsKolam' => $calendarBookingsKolam
        ]);

    }

    // Menampilkan halaman pembuatan booking ShowKolam
    public function create() {
        return view('admin.showk.create'); 
    }

    // Menyimpan booking ShowKolam ke dalam database
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
            return redirect()->route('showk.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showkolam = new ShowKolam();
        $showkolam->nama_pengguna = $request->nama_pengguna; 
        $showkolam->nama_kegiatan = $request->nama_kegiatan;
        $showkolam->tanggal_mulai = $request->tanggal_mulai; 
        $showkolam->tanggal_selesai = $request->tanggal_selesai; 
        $showkolam->waktu_penggunaan = $request->waktu_penggunaan; 
        $showkolam->save();

        return redirect()->route('showk.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking ShowKolam
    public function update($id, Request $request) {
        $showkolam = ShowKolam::findOrFail($id);

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
            return redirect()->route('showk.edit', $showkolam->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showkolam->nama_pengguna = $request->nama_pengguna; 
        $showkolam->nama_kegiatan = $request->nama_kegiatan;
        $showkolam->tanggal_mulai = $request->tanggal_mulai; 
        $showkolam->tanggal_selesai = $request->tanggal_selesai;
        $showkolam->waktu_penggunaan = $request->waktu_penggunaan; 
        $showkolam->save();

        return redirect()->route('showk.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking ShowKolam
    public function edit($id) {
        $showkolam = ShowKolam::findOrFail($id);
        return view('admin.showk.edit', compact('showkolam'));
    }

    // Menghapus booking ShowKolam
    public function destroy($id) {
        $showkolam = ShowKolam::findOrFail($id);
        $showkolam->delete();
        return redirect()->route('showk.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
