@extends('layouts.admin')

@section('content')
    <h1>Tambah Gedung</h1>
    <form action="{{ route('buildings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Nama Gedung</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="images">Upload Gambar</label>
            <input type="file" name="images[]" class="form-control" multiple accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="price">Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" class="form-control w-6/12 h-40" required></textarea>
        </div>

        <h1 class="font-bold flex justify-center text-2xl">Fasilitas</h1>

        <div>
            <label for="kapasitas" class="pr-10">Kapasitas Orang</label>
            <input type="number" name="kapasitas" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700"
                required>
        </div>

        <div>
            <label for="ruang" class="pr-10">Ruang Acara</label>
            <input type="text" name="ruang" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700"
                required>
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
            <input type="number" name="toilet" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700"
                required>
        </div>

        <div>
            <label for="viproom" class="pr-10">VIP Room</label>
            <input type="number" name="viproom" class="form-control px-4 py-2 rounded-lg bg-white border border-gray-700"
                required>
        </div>

        <div class="flex justify-center">
            <button type="submit"
                class="btn btn-primary bg-green-500 rounded-md w-38 py-2 px-4 text-white hover:bg-green-700">
                Tambahkan Gedung
            </button>
        </div>
    </form>
@endsection
