<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShowPancaniti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ShowPancanitiController extends Controller
{
       // Menampilkan daftar booking ShowPancaniti==============================================================
        public function index() {
        $tableBookingsPancaniti = ShowPancaniti::all();
        $calendarBookingsPancaniti = ShowPancaniti::all()->map(function($bookingpancaniti) {
            return [
                'id' => $bookingpancaniti->id,
                'title' => $bookingpancaniti->nama_kegiatan,
                'start' => $bookingpancaniti->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingpancaniti->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingpancaniti->nama_pengguna,
                    'waktu_penggunaan' => $bookingpancaniti->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showpancaniti.index', [ 
            'tableBookingsPancaniti' => $tableBookingsPancaniti,
            'calendarBookingsPancaniti' => $calendarBookingsPancaniti
        ]);

    }

    // Menampilkan halaman pembuatan booking ShowPancaniti
    public function create() {
        return view('admin.showpancaniti.create'); 
    }

    // Menyimpan booking ShowPancaniti ke dalam database
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
            return redirect()->route('showpancaniti.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showpancaniti = new ShowPancaniti();
        $showpancaniti->nama_pengguna = $request->nama_pengguna; 
        $showpancaniti->nama_kegiatan = $request->nama_kegiatan;
        $showpancaniti->tanggal_mulai = $request->tanggal_mulai; 
        $showpancaniti->tanggal_selesai = $request->tanggal_selesai; 
        $showpancaniti->waktu_penggunaan = $request->waktu_penggunaan; 
        $showpancaniti->save();

        return redirect()->route('showpancaniti.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking Showpancaniti
    public function update($id, Request $request) {
        $showpancaniti = ShowPancaniti::findOrFail($id);

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
            return redirect()->route('showpancaniti.edit', $showpancaniti->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showpancaniti->nama_pengguna = $request->nama_pengguna; 
        $showpancaniti->nama_kegiatan = $request->nama_kegiatan;
        $showpancaniti->tanggal_mulai = $request->tanggal_mulai; 
        $showpancaniti->tanggal_selesai = $request->tanggal_selesai;
        $showpancaniti->waktu_penggunaan = $request->waktu_penggunaan; 
        $showpancaniti->save();

        return redirect()->route('showpancaniti.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking Showpancaniti
    public function edit($id) {
        $showpancaniti = ShowPancaniti::findOrFail($id);
        return view('admin.showpancaniti.edit', compact('showpancaniti'));
    }

    // Menghapus booking Showpancaniti
    public function destroy($id) {
        $showpancaniti = ShowPancaniti::findOrFail($id);
        $showpancaniti->delete();
        return redirect()->route('showpancaniti.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
