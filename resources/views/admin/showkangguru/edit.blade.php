@extends('layouts.adminbook')

@section('title', 'Admin | Edit Booking WISMA KANGGURU')

@section('content')
    <div class="bg-primary py-3">
        <h3 class="text-white text-center">BOOKING WISMA KANGGURU</h3>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('showkangguru.index') }}" class="btn btn-primary">List Booking</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-primary">
                        <h3 class="text-white">EDIT FORM BOOKING</h3>
                    </div>
                    <form action="{{ route('showkangguru.update', $showkangguru->id) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="" class="form-label h5">Nama Pengguna</label>
                                <input value="{{ old('nama_pengguna', $showkangguru->nama_pengguna) }}" type="text"
                                    class="@error('nama_pengguna') is-invalid @enderror form-control-lg form-control"
                                    placeholder="Nama pengguna" name="nama_pengguna" required>
                                @error('nama_pengguna')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Nama Kegiatan</label>
                                <input value="{{ old('nama_kegiatan', $showkangguru->nama_kegiatan) }}" type="text"
                                    class="@error('nama_kegiatan') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Nama Kegiatan" name="nama_kegiatan" required>
                                @error('nama_kegiatan')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Tanggal Mulai</label>
                                @php
                                    $tanggalSewa = explode(' - ', $showkangguru->tanggal_sewa);
                                    $tanggalMulai = isset($tanggalSewa[0]) ? $tanggalSewa[0] : '';
                                    $tanggalSelesai = isset($tanggalSewa[1]) ? $tanggalSewa[1] : '';
                                @endphp
                                <input value="{{ old('tanggal_mulai', $tanggalMulai) }}" type="date"
                                    class="@error('tanggal_mulai') is-invalid @enderror form-control form-control-lg"
                                    name="tanggal_mulai" required>
                                @error('tanggal_mulai')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Tanggal Selesai</label>
                                <input value="{{ old('tanggal_selesai', $tanggalSelesai) }}" type="date"
                                    class="@error('tanggal_selesai') is-invalid @enderror form-control form-control-lg"
                                    name="tanggal_selesai" required>
                                @error('tanggal_selesai')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label h5">Waktu Penggunaan</label>
                                <input value="{{ old('waktu_penggunaan', $showkangguru->waktu_penggunaan) }}"
                                    type="text"
                                    class="@error('waktu_penggunaan') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Waktu Penggunaan (contoh: 08:00 - 12:00)" name="waktu_penggunaan" required>
                                @error('waktu_penggunaan')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
