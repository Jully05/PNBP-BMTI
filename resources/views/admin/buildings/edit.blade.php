@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-3xl font-bold py-10">Edit Gedung</h1>
    <div class="flex justify-center">
        <form action="{{ route('buildings.update', $building->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-5">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name" class="pr-5">Nama Gedung</label>
                <input type="text" name="name"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700" value="{{ $building->name }}"
                    required>
            </div>

            <div class="form-group">
                <div class="flex">
                    <label for="image" class="pr-5">Gambar Saat Ini</label>
                    <img src="{{ asset($building->image) }}" alt="{{ $building->name }}"
                        style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">
                </div>
                <label for="image">Upload Gambar Baru</label>
                <input type="file" name="images[]" class="form-control" multiple accept="image/*" required>
                <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
            </div>

            <div class="form-group">
                <label for="price" class="pr-10">Harga</label>
                <input type="number" name="price"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700" value="{{ $building->price }}"
                    required>
            </div>

            <div class="form-group flex items-start">
                <label for="description" class="pr-10">Deskripsi</label>
                <textarea name="description" class="form-control w-96 h-40 px-4 py-2 rounded-lg bg-white border border-gray-700"
                    required>{{ $building->description }}</textarea>
            </div>

            <h1 class="font-bold flex justify-center text-2xl">Fasilitas</h1>

            <div>
                <label for="kapasitas" class="pr-10">Kapasitas Orang</label>
                <input type="number" name="kapasitas"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700">
            </div>
            <div>
                <label for="ruang" class="pr-10">Ruang Acara</label>
                <input type="text" name="ruang"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700">
            </div>
            <div>
                <label for="AC" class="pr-10">Ketersediaan AC</label>
                <select name="AC" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700" required>
                    <option value="0">Tidak ada</option>
                    <option value="1">Ada</option>
                </select>
            </div>

            <div>
                <label for="wifi" class="pr-10">Koneksi Wifi</label>
                <select name="wifi" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700" required>
                    <option value="0">Tidak ada</option>
                    <option value="1">Ada</option>
                </select>
            </div>

            <div>
                <label for="parkir" class="pr-10">Area Parkir</label>
                <select name="parkir" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700" required>
                    <option value="0">Tidak ada</option>
                    <option value="1">Ada</option>
                </select>
            </div>
            <div>
                <label for="toilet" class="pr-10">Jumlah Toilet</label>
                <input type="number" name="toilet"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700">
            </div>
            <div>
                <label for="viproom" class="pr-10">VIP Room</label>
                <input type="number" name="viproom"
                    class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700">
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="btn btn-primary bg-green-500 rounded-md w-38 py-2 px-4 text-white hover:bg-green-700">Perbarui
                    Gedung</button>
            </div>
        </form>
    </div>
@endsection
