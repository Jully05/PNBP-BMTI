<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class BuildingAdminController extends Controller
{
    // Menampilkan daftar gedung (READ)
    public function index()
    {
        $buildings = Building::all();
        return view('admin.buildings.index', compact('buildings'));
    }

    // Menampilkan form tambah gedung (CREATE)
    public function create()
    {
        return view('admin.buildings.create');
    }

    // Menyimpan data gedung baru (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string', // Validasi untuk description
            'images.*' => 'required|image|max:2048', // Validasi untuk setiap gambar
        ]);

        // Membuat entri baru di tabel buildings
        $building = new Building();
        $building->name = $request->name;
        $building->price = $request->price;
        $building->description = $request->description; // Simpan deskripsi gedung

        // Simpan gambar pertama sebagai gambar utama untuk card
        if ($request->hasFile('images')) {
            $imageNames = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $image->move(public_path('uploads/buildings'), $imageName);
                $imageNames[] = 'uploads/buildings/' . $imageName;
            }
            // Simpan gambar utama di database
            $building->image = $imageNames[0]; // Ambil gambar pertama untuk ditampilkan di card
            // Simpan semua gambar di kolom lain
            $building->images = json_encode($imageNames); // Simpan sebagai JSON atau serialized
        }

        $building->save();

        return redirect()->route('buildings.index')->with('success', 'Gedung berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $building = Building::findOrFail($id); // Ambil gedung berdasarkan ID
        return view('admin.buildings.show', compact('building')); // Kembali ke view show
    }

    // Menampilkan form edit gedung (EDIT)
    public function edit(Building $building)
    {
        return view('admin.buildings.edit', compact('building'));
    }

    // Memperbarui data gedung (UPDATE)
    public function update(Request $request, $id)
    {
        $building = Building::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string', // Validasi untuk description
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Menangani upload gambar (jika ada gambar baru)
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/buildings'), $imageName);

            // Menghapus gambar lama jika ada
            if (file_exists(public_path($building->image))) {
                unlink(public_path($building->image));
            }

            $building->image = 'uploads/buildings/' . $imageName;
        }

        $building->name = $request->name;
        $building->description = $request->description; // Update deskripsi gedung
        $building->price = $request->price;
        $building->save();

        return redirect()->route('buildings.index')->with('success', 'Gedung berhasil diupdate');
    }


    // Menghapus gedung (DELETE)
    public function destroy(Building $building)
    {
        $building->delete();

        return redirect()->route('buildings.index')->with('success', 'Gedung berhasil dihapus.');
    }
}
