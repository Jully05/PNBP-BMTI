<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ShowKangguru;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ShowKangguruController extends Controller
{
   // Menampilkan daftar booking showkangguru==============================================================
    public function index() {
    $tableBookingsKangguru = ShowKangguru::all();
    $calendarBookingsKangguru = ShowKangguru::all()->map(function($bookingkangguru) {
        return [
            'id' => $bookingkangguru->id,
            'title' => $bookingkangguru->nama_kegiatan,
            'start' => $bookingkangguru->tanggal_mulai,
            'end' => date('Y-m-d', strtotime($bookingkangguru->tanggal_selesai . ' +1 day')),
            'extendedProps' => [
                'nama_pengguna' => $bookingkangguru->nama_pengguna,
                'waktu_penggunaan' => $bookingkangguru->waktu_penggunaan
            ]
        ];
    });

    // Kirim kedua data ke view
    return view('admin.showkangguru.index', [ 
        'tableBookingsKangguru' => $tableBookingsKangguru,
        'calendarBookingsKangguru' => $calendarBookingsKangguru
    ]);

}

// Menampilkan halaman pembuatan booking showkangguru
public function create() {
    return view('admin.showkangguru.create'); 
}

// Menyimpan booking showkangguru ke dalam database
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
        return redirect()->route('showkangguru.create')->withInput()->withErrors($validator);
    }

    // Insert data ke database
    $showkangguru = new ShowKangguru();
    $showkangguru->nama_pengguna = $request->nama_pengguna; 
    $showkangguru->nama_kegiatan = $request->nama_kegiatan;
    $showkangguru->tanggal_mulai = $request->tanggal_mulai; 
    $showkangguru->tanggal_selesai = $request->tanggal_selesai; 
    $showkangguru->waktu_penggunaan = $request->waktu_penggunaan; 
    $showkangguru->save();

    return redirect()->route('showkangguru.index')->with('success', 'Booking Gedung added successfully.');
}

// Update data booking showkangguru
public function update($id, Request $request) {
    $showkangguru = ShowKangguru::findOrFail($id);

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
        return redirect()->route('showkangguru.edit', $showkangguru->id)->withInput()->withErrors($validator);
    }

    // Update data ke database
    $showkangguru->nama_pengguna = $request->nama_pengguna; 
    $showkangguru->nama_kegiatan = $request->nama_kegiatan;
    $showkangguru->tanggal_mulai = $request->tanggal_mulai; 
    $showkangguru->tanggal_selesai = $request->tanggal_selesai;
    $showkangguru->waktu_penggunaan = $request->waktu_penggunaan; 
    $showkangguru->save();

    return redirect()->route('showkangguru.index')->with('success', 'Update Booking Gedung successfully.');
}

// Menampilkan halaman edit booking showkangguru
public function edit($id) {
    $showkangguru = ShowKangguru::findOrFail($id);
    return view('admin.showkangguru.edit', compact('showkangguru'));
}

// Menghapus booking showkangguru
public function destroy($id) {
    $showkangguru = ShowKangguru::findOrFail($id);
    $showkangguru->delete();
    return redirect()->route('showkangguru.index')->with('success', 'Delete Booking Gedung successfully.');
}
}
