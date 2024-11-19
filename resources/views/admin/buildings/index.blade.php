@extends('layouts.admin')

@section('content')
    <h1>Daftar Gedung</h1>
    <a href="{{ route('buildings.create') }}" class="btn btn-primary">Tambah Gedung</a>
    <div class="flex justify-center px-32">
        <table class="">
            <thead class="border border-blue-500">
                <tr>
                    <th>Gambar</th>
                    <th>Nama Gedung</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buildings as $building)
                    <tr>
                        <td>
                            <img src="{{ asset($building->image) }}" alt="{{ $building->name }}"
                                style="width: 100px; height: 100px; object-fit: cover;">
                        </td>
                        <td>{{ $building->name }}</td>
                        <td>Rp {{ number_format($building->price, 0, ',', '.') }}</td>
                        <td>{{ $building->description }}</td>
                        <td>{{ $building->AC ? 'Sistem pendingin udara yang efisien untuk menjaga suhu ruangan tetap nyaman.' : 'Tidak Ada' }}
                        </td>
                        <td>{{ $building->wifi ? 'Koneksi internet berkecepatan tinggi untuk mendukung kegiatan online.' : 'Tidak Ada' }}
                        </td>
                        <td>{{ $building->kapasitas }}</td>
                        <td>{{ $building->ruang }}</td>
                        <td>{{ $building->toilet }}</td>
                        <td>{{ $building->parkir ? 'Area parkir yang cukup untuk menampung banyak kendaraan.' : 'Tidak Ada' }}
                        </td>
                        <td>{{ $building->viproom }}</td>
                        <td>
                            <a href="{{ route('buildings.edit', $building->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('buildings.destroy', $building->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus gedung ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
