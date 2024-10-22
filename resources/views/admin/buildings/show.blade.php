{{-- @extends('layouts.admin')

@section('content')
    <h1>Detail Gedung: {{ $building->name }}</h1>

    <h3>Gambar</h3>
    @if ($building->images)
        @foreach (json_decode($building->images) as $image)
            <img src="{{ asset($image) }}" alt="Gambar Gedung" style="max-width: 200px; max-height: 200px; margin: 10px;">
        @endforeach
    @endif

    <h3>Harga: Rp {{ number_format($building->price, 2) }}</h3>
    <p>Nama: {{ $building->name }}</p>
    <p>Deskripsi : {{ $building->description }}</p>
@endsection --}}
@extends('layouts.admin')

@section('content')

    <div class="flex md:ml-20 items-center mt-10 ">
        <button onclick="window.location.href='/fasilitas'"
            class="flex items-center mx-10 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mr-2 " fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5l-7 7 7 7" />
            </svg>
            Back
        </button>
    </div>
    <div class="min-h-full flex justify-center">
        <main>
            <!-- Bagian Gambar dan Deskripsi -->
            <div class="max-w-screen-lg flex flex-col md:flex-row justify-between mt-4 mb-6 gap-6 mx-10 ">
                <!--Bagian Gambar-->
                <div class="w-full md:w-1/2 bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl">
                    <p class="text-xl font-extrabold mb-10 ">Galeri </p>
                    <div class="w-2xl ">
                        <img id="mainImage" src="{{ asset($building->image) }}" alt="Foto Gedung"
                            class="w-full h-[170px] md:h-[300px]  ">
                    </div>
                    <div class="relative w-full mt-6 overflow-hidden">
                        <!-- Tombol Scroll Kiri -->
                        <button
                            class="scroll-left absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8249;
                        </button>
                        <!-- Galeri gambar kecil -->
                        <div id="smallImages" class="flex space-x-4 transition-transform duration-300 ">
                            @if ($building->images)
                                @foreach (json_decode($building->images) as $image)
                                    <img src="{{ asset($image) }}" alt="Foto 1"
                                        class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300"
                                        data-src="{{ asset($image) }}">
                                @endforeach
                            @endif
                        </div>
                        <!-- Tombol Scroll Kanan -->
                        <button onclick="scrollRight()"
                            class="scroll-right absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8250;
                        </button>
                    </div>
                </div>

                <!-- Bagian Deskripsi dan Harga -->
                <div class="w-full md:w-1/2  shadow-lg rounded-lg p-6">
                    <p class="text-xl font-extrabold ">Deskripsi</p>
                    <div class=" to-indigo-500 rounded-lg text-justify center">
                        <p class="py-3 px-5 max-h-[350px] overflow-hidden">
                            {{ $building->description }}
                        </p>
                    </div>
                    <h2 class="text-xl font-extrabold mt-5 ">Harga</h2>
                    <div class="mt-5  to-indigo-500 p-6 rounded-lg shadow-xl ">
                        <table class=" ">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2  text-left">Status Pemakaian</th>
                                    <th class="px-4 py-2 text-left">Biaya Retribusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-2">per hari</td>
                                    <td class="px-4 py-2">Rp. {{ number_format($building->price) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bagian Fasilitas dan Jadwal -->
            <div class="max-w-screen-lg flex flex-col md:flex-row justify-between mt-10 gap-6 mb-10 mx-10">
                <!-- Fasilitas -->
                <div class="w-full md:w-1/2 shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-extrabold mb-4 ">Fasilitas</h2>
                    <ul class="bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl text-justify center">
                        <li class="flex items-center">
                            <i class="fas fa-couch fa-sm text-blue-500 mr-2"></i> Ruang Acara: Ruang yang luas dan
                            fleksibel, dapat disesuaikan untuk berbagai jenis acara.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-snowflake fa-sm text-blue-500 mr-2"></i> AC: Sistem pendingin udara yang
                            efisien untuk menjaga suhu ruangan tetap nyaman.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-wifi fa-sm text-blue-500 mr-2"></i> Wi-Fi: Koneksi internet berkecepatan
                            tinggi untuk mendukung kegiatan online.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-car fa-sm text-blue-500 mr-2"></i> Parkir: Area parkir yang cukup untuk
                            menampung banyak kendaraan.
                        </li>
                    </ul>
                </div>

                <!-- Jadwal Sewa (Kalender) -->
                <div class="w-full md:w-1/2 shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-extrabold mb-4">Jadwal Sewa</h2>
                    <div id="calendar" class="w-full h-64 bg-gray-200 rounded-lg relative">
                        <div class="flex justify-between items-center absolute top-2 left-0 right-0">
                            <button id="prevMonth" class="text-sm bg-gray-300 p-1 rounded hover:bg-gray-400">
                                &#8249;
                            </button>
                            <div class="text-lg font-bold">Bulan Tahun</div> <!-- Ganti dengan nama bulan dan tahun -->
                            <button id="nextMonth" class="text-sm bg-gray-300 p-1 rounded hover:bg-gray-400">
                                &#8250;
                            </button>
                        </div>
                    </div>
                </div>
                <x-whatsapp-admin></x-whatsapp-admin>
        </main>
    </div>
@endsection
