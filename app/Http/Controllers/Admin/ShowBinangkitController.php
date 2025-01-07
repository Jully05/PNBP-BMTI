<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShowBinangkit;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowBinangkitController extends Controller
{
       // Menampilkan daftar booking Showbinangkit==============================================================
        public function index() {
        $tableBookingsBinangkit = ShowBinangkit::all();
        $calendarBookingsBinangkit = ShowBinangkit::all()->map(function($bookingbinangkit) {
            return [
                'id' => $bookingbinangkit->id,
                'title' => $bookingbinangkit->nama_kegiatan,
                'start' => $bookingbinangkit->tanggal_mulai,
                'end' => date('Y-m-d', strtotime($bookingbinangkit->tanggal_selesai . ' +1 day')),
                'extendedProps' => [
                    'nama_pengguna' => $bookingbinangkit->nama_pengguna,
                    'waktu_penggunaan' => $bookingbinangkit->waktu_penggunaan
                ]
            ];
        });

        // Kirim kedua data ke view
        return view('admin.showbinangkit.index', [ 
            'tableBookingsBinangkit' => $tableBookingsBinangkit,
            'calendarBookingsBinangkit' => $calendarBookingsBinangkit
        ]);

    }

    // Menampilkan halaman pembuatan booking Showbinangkit
    public function create() {
        return view('admin.showbinangkit.create'); 
    }

    // Menyimpan booking Showbinangkit ke dalam database
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
            return redirect()->route('showbinangkit.create')->withInput()->withErrors($validator);
        }

        // Insert data ke database
        $showbinangkit = new ShowBinangkit();
        $showbinangkit->nama_pengguna = $request->nama_pengguna; 
        $showbinangkit->nama_kegiatan = $request->nama_kegiatan;
        $showbinangkit->tanggal_mulai = $request->tanggal_mulai; 
        $showbinangkit->tanggal_selesai = $request->tanggal_selesai; 
        $showbinangkit->waktu_penggunaan = $request->waktu_penggunaan; 
        $showbinangkit->save();

        return redirect()->route('showbinangkit.index')->with('success', 'Booking Gedung added successfully.');
    }

    // Update data booking Showbinangkit
    public function update($id, Request $request) {
        $showbinangkit = ShowBinangkit::findOrFail($id);

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
            return redirect()->route('showbinangkit.edit', $showbinangkit->id)->withInput()->withErrors($validator);
        }

        // Update data ke database
        $showbinangkit->nama_pengguna = $request->nama_pengguna; 
        $showbinangkit->nama_kegiatan = $request->nama_kegiatan;
        $showbinangkit->tanggal_mulai = $request->tanggal_mulai; 
        $showbinangkit->tanggal_selesai = $request->tanggal_selesai;
        $showbinangkit->waktu_penggunaan = $request->waktu_penggunaan; 
        $showbinangkit->save();

        return redirect()->route('showbinangkit.index')->with('success', 'Update Booking Gedung successfully.');
    }

    // Menampilkan halaman edit booking Showbinangkit
    public function edit($id) {
        $showbinangkit = ShowBinangkit::findOrFail($id);
        return view('admin.showbinangkit.edit', compact('showbinangkit'));
    }

    // Menghapus booking Showbinangkit
    public function destroy($id) {
        $showbinangkit = ShowBinangkit::findOrFail($id);
        $showbinangkit->delete();
        return redirect()->route('showbinangkit.index')->with('success', 'Delete Booking Gedung successfully.');
    }
}
