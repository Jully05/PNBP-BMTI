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
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validasi untuk semua gambar
            'kapasitas' => 'required|integer',
            'ruang' => 'required|string',
            'AC' => 'required|boolean',
            'wifi' => 'required|boolean',
            'parkir' => 'required|boolean',
            'toilet' => 'required|integer',
            'viproom' => 'required|integer',
        ]);

        $building = new Building();
        $building->fill($request->all()); // Mass-assignment

        if ($request->hasFile('images')) {
            $imageNames = [];
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                $image->move(public_path('uploads/buildings'), $imageName);
                $imageNames[] = 'uploads/buildings/' . $imageName;
            }
            $building->images = json_encode($imageNames);
            $building->image = $imageNames[1] ?? null; // Mengambil gambar pertama jika ada
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
        $title = 'Layanan Penggunaan Fasilitas Lembaga';
        return view('admin.buildings.show', compact('building')); // Kembali ke view show
    }

    // Menampilkan form edit gedung (EDIT)
    public function edit(Building $building)
    {
        return view('admin.buildings.edit', compact('building'));
    }

    // Memperbarui data gedung (UPDATE)
    public function update(Request $request, Building $building)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validasi untuk semua gambar
            'kapasitas' => 'required|integer',
            'ruang' => 'required|string',
            'AC' => 'required|boolean',
            'wifi' => 'required|boolean',
            'parkir' => 'required|boolean',
            'toilet' => 'required|integer',
            'viproom' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/buildings'), $imageName);

            // Urutkan file berdasarkan nama
            usort($files, function ($a, $b) {
                return strcmp($a->getClientOriginalName(), $b->getClientOriginalName());
            });

            // Simpan file ke storage
            foreach ($files as $file) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->storeAs('public/buildings', $filename);

                // Simpan nama file ke database jika perlu
                $building->images()->create(['path' => $filename]);
            };
            
            // Menghapus gambar lama jika ada
            if ($building->image && file_exists(public_path($building->image))) {
                unlink(public_path($building->image));
            }

            $building->image = 'uploads/buildings/' . $imageName;
            }

        $building->update($request->all()); // Update entri

        return redirect()->route('buildings.index')->with('success', 'Gedung berhasil diupdate');
    }

    // Menghapus gedung (DELETE)
    public function destroy(Building $building)
    {
        if ($building->image && file_exists(public_path($building->image))) {
            unlink(public_path($building->image));
        }

        $building->delete();

        return redirect()->route('buildings.index')->with('success', 'Gedung berhasil dihapus.');
    }
}
