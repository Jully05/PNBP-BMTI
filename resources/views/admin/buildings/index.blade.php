@extends('layouts.admin')

@section('content')
    <h1>Daftar Gedung</h1>
    <a href="{{ route('buildings.create') }}" class="btn btn-primary">Tambah Gedung</a>

    <table class="table">
        <thead>
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
                    <td>
                        <a href="{{ route('buildings.edit', $building->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('buildings.destroy', $building->id) }}" method="POST" style="display:inline;">
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
@endsection
