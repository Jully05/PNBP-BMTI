<?php

namespace App\Http\Controllers\Admin;

use App\Models\ShowRbi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ShowRbiController extends Controller
{
       // Menampilkan daftar booking ShowRbi==============================================================
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
        return view('admin.showrbi.index', [ 
            'tableBookingsRbi' => $tableBookingsRbi,
            'calendarBookingsRbi' => $calendarBookingsRbi
        ]);

    }

    // Menampilkan halaman pembuatan booking ShowRbi
    public function create() {
        return view('admin.showrbi.create'); 
    }

    // Menyimpan booking ShowRbi ke dalam database
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
            return redirect()->route('showrbi.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showrbi = new ShowRbi();
        $showrbi->nama_pengguna = $request->nama_pengguna; 
        $showrbi->nama_kegiatan = $request->nama_kegiatan;
        $showrbi->tanggal_mulai = $request->tanggal_mulai; 
        $showrbi->tanggal_selesai = $request->tanggal_selesai; 
        $showrbi->waktu_penggunaan = $request->waktu_penggunaan; 
        $showrbi->save();

        return redirect()->route('showrbi.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking ShowRbi
    public function update($id, Request $request) {
        $showrbi = ShowRbi::findOrFail($id);

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
            return redirect()->route('showrbi.edit', $showrbi->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showrbi->nama_pengguna = $request->nama_pengguna; 
        $showrbi->nama_kegiatan = $request->nama_kegiatan;
        $showrbi->tanggal_mulai = $request->tanggal_mulai; 
        $showrbi->tanggal_selesai = $request->tanggal_selesai;
        $showrbi->waktu_penggunaan = $request->waktu_penggunaan; 
        $showrbi->save();

        return redirect()->route('showrbi.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking ShowRbi
    public function edit($id) {
        $showrbi = ShowRbi::findOrFail($id);
        return view('admin.showrbi.edit', compact('showrbi'));
    }

    // Menghapus booking ShowRbi
    public function destroy($id) {
        $showrbi = ShowRbi::findOrFail($id);
        $showrbi->delete();
        return redirect()->route('showrbi.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
