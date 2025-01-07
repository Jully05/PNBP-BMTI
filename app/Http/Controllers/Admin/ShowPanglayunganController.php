<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShowPanglayungan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowPanglayunganController extends Controller
{
       // Menampilkan daftar booking Showpanglayungan==============================================================
        public function index() {
        $tableBookingsPanglayungan = ShowPanglayungan::all();
        $calendarBookingsPanglayungan = ShowPanglayungan::all()->map(function($bookingpanglayungan) {
            return [
                'id' => $bookingpanglayungan->id,
                'title' => $bookingpanglayungan->nama_kegiatan,
                'start' => $bookingpanglayungan->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingpanglayungan->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingpanglayungan->nama_pengguna,
                    'waktu_penggunaan' => $bookingpanglayungan->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showpanglayungan.index', [ 
            'tableBookingsPanglayungan' => $tableBookingsPanglayungan,
            'calendarBookingsPanglayungan' => $calendarBookingsPanglayungan
        ]);

    }

    // Menampilkan halaman pembuatan booking Show Panglayungan
    public function create() {
        return view('admin.showpanglayungan.create'); 
    }

    // Menyimpan booking Show Panglayungan ke dalam database
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
            return redirect()->route('showpanglayungan.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showpanglayungan = new ShowPanglayungan();
        $showpanglayungan->nama_pengguna = $request->nama_pengguna; 
        $showpanglayungan->nama_kegiatan = $request->nama_kegiatan;
        $showpanglayungan->tanggal_mulai = $request->tanggal_mulai; 
        $showpanglayungan->tanggal_selesai = $request->tanggal_selesai; 
        $showpanglayungan->waktu_penggunaan = $request->waktu_penggunaan; 
        $showpanglayungan->save();

        return redirect()->route('showpanglayungan.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking Show Panglayungan
    public function update($id, Request $request) {
        $showpanglayungan = ShowPanglayungan::findOrFail($id);

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
            return redirect()->route('showpanglayungan.edit', $showpanglayungan->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showpanglayungan->nama_pengguna = $request->nama_pengguna; 
        $showpanglayungan->nama_kegiatan = $request->nama_kegiatan;
        $showpanglayungan->tanggal_mulai = $request->tanggal_mulai; 
        $showpanglayungan->tanggal_selesai = $request->tanggal_selesai;
        $showpanglayungan->waktu_penggunaan = $request->waktu_penggunaan; 
        $showpanglayungan->save();

        return redirect()->route('showpanglayungan.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking Show Panglayungan
    public function edit($id) {
        $showpanglayungan = ShowPanglayungan::findOrFail($id);
        return view('admin.showpanglayungan.edit', compact('showpanglayungan'));
    }

    // Menghapus booking Show panglayungan
    public function destroy($id) {
        $showpanglayungan = ShowPanglayungan::findOrFail($id);
        $showpanglayungan->delete();
        return redirect()->route('showpanglayungan.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
