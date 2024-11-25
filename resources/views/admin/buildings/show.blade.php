@extends('layouts.admin')

@section('content')
    <nav id="navbar" class="fixed top-0 left-0 w-full z-20 bg-gray-900" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="pr-[300px]">
                        <a href="/">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="/img/logo-bmti.png" alt="Your Company">
                            </div>
                        </a>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-center space-x-4">
                            <!-- Navigation Links -->
                            <x-nav-link href="/" :active="request()->is('/')">
                                <div class="flex justify-center items-center">
                                    <svg class="w-5 h-5 mr-3 rtl:rotate-[270deg] mb-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M9 3L3 9h2v6h4V11h2v4h4V9h2L9 3z" />
                                    </svg>
                                    <h1>HOME</h1>
                                </div>
                            </x-nav-link>
                            <x-nav-link href="/fasilitas" :active="request()->is('fasilitas')">Fasilitas Lembaga</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">Pelayanan PKL</x-nav-link>
                            <x-nav-link href="/kunjin" :active="request()->is('kunjin')">Kunj-In</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-gray-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/40 focus:ring-offset-2 focus:ring-offset-blue-800"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" id="mobile-menu" x-show="isOpen">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                <x-nav-link href="/" :active="request()->is('/')">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-3 rtl:rotate-[270deg] mb-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 3L3 9h2v6h4V11h2v4h4V9h2L9 3z" />
                        </svg>
                        <h1>Home</h1>
                    </div>
                </x-nav-link>
                <x-nav-link href="/fasilitas" :active="request()->is('fasilitas')">Layanan Penggunaan Fasilitas
                    Lembaga</x-nav-link>
                <x-nav-link href="/register" :active="request()->is('register')">Layanan Magang ( PKL )</x-nav-link>
                <x-nav-link href="#" :active="request()->is('#')">Layanan Kunjungan ( Studi Tour )</x-nav-link>
            </div>
        </div>
    </nav>

    <div class="md:ml-20 items-center mt-20 hidden md:block">
        <button onclick="window.location.href='/fasilitas#build'"
            class="flex items-center mx-10 mb-5 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mr-2 " fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5l-7 7 7 7" />
            </svg>
            Back
        </button>
    </div>
    <div class="min-h-full flex justify-center md:pt-0 pt-12">
        <main>
            <!-- Bagian Gambar dan Jadwal sewa -->
            <div class="w-full flex flex-col md:flex-row md:px-10 justify-center gap-6 ">
                <!--Bagian Gambar-->
                <div class="w-full md:w-3/5 bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg md:shadow-lg">
                    <p class="md:text-2xl font-bold pb-5">Galeri Gedung {{ $building->name }}</p>
                    <div class="w-2xl">
                        <img id="mainImage" src="{{ asset($building->image) }}" alt="Foto Gedung"
                            class="w-full h-[170px] md:h-[450px]  ">
                    </div>
                    <div class="relative w-full mt-6 overflow-hidden">
                        <!-- Tombol Scroll Kiri -->
                        <button
                            class="md:block hidden scroll-left absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8249;
                        </button>
                        <!-- Galeri gambar kecil -->
                        <div id="smallImages"
                            class="flex space-x-1 transition-transform duration-300 overflow-x-auto hide-scrollbar">
                            @if ($building->images)
                                @foreach (json_decode($building->images) as $image)
                                    <img src="{{ asset($image) }}" alt="Foto 1"
                                        class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                        data-src="{{ asset($image) }}">
                                @endforeach
                            @endif
                        </div>
                        <!-- Tombol Scroll Kanan -->
                        <button onclick="scrollRight()"
                            class="md:block hidden scroll-right absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8250;
                        </button>
                    </div>
                </div>

                <!-- Bagian Kalender -->
                <div class="w-full md:w-2/5 md:shadow-lg rounded-lg p-6">
                    <h2 class="md:text-2xl font-bold pb-5">Jadwal Sewa {{ $building->name }}</h2>
                    <div id="calendar" class="w-full md:h-5/6 h-80 bg-gray-200 p-3 rounded-lg">
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
            </div>

            <!-- Bagian Deskripsi dan fasilitas -->
            <div class=" md:px-10 flex flex-col md:flex-row justify-between md:gap-6">
                <!-- Deskripsi -->
                <div
                    class="w-full flex flex-col md:flex-row md:gap-10 gap-5 md:w-full md:shadow-lg rounded-lg md:py-6 px-6 py-3">
                    <div class="md:w-4/5">
                        <p class="text-xl font-bold ">Deskripsi {{ $building->name }}</p>
                        <div class=" rounded-lg text-justify center">
                            <p class="py-3 max-h-[350px] md:text-base text-xs overflow-hidden">
                                {{ $building->description }}
                            </p>
                        </div>
                    </div>
                    <div class="md:w-2/5">
                        <h2 class="text-xl font-bold">Harga Sewa {{ $building->name }}</h2>
                        <table class="mt-1">
                            <thead>
                                <tr class="border-b">
                                    <th class="py-2 text-left md:pr-20 pr-10">Status Pemakaian</th>
                                    <th class="pr-20 py-2 text-left">Biaya Retribusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-1 py-2 text-sm">per hari</td>
                                    <td class="px-1 py-2 text-sm">Rp.
                                        {{ number_format($building->price) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="text-xl font-bold py-5 ">Fasilitas</h2>
                        <table
                            class="flex text-justify items-center bg-gradient-to-r from-white-500 to-indigo-500 text-sm md:text-base">
                            <tr>
                                <td><i class="fas fa-user fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Kapasitas: {{ $building->kapasitas }} orang</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-couch fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Ruang Acara: {{ $building->ruang }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-snowflake fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>AC:
                                    {{ $building->AC == 1 ? 'Sistem pendingin udara yang efisien untuk menjaga suhu ruangan tetap nyaman.' : 'Tidak Ada' }}
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-wifi fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Wi-Fi:
                                    {{ $building->wifi == 1 ? 'Koneksi internet berkecepatan tinggi untuk mendukung kegiatan online.' : 'Tidak Ada' }}
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-car fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Parkir:
                                    {{ $building->parkir == 1 ? 'Area parkir yang cukup untuk menampung banyak kendaraan.' : 'Tidak Ada' }}
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-restroom fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Toilet: {{ $building->toilet }}</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-door-closed fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>VIP Room: {{ $building->viproom }}</td>
                            </tr>
                        </table>

                        <ul class="bg-red-300  rounded-lg md:text-base text-xs">
                            <li class="flex items-center">

                            </li>
                            <li class="flex items-center">

                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Fasilitas -->
            </div>

            <div class="px-10">
                <div class="flex justify-center mt-10">
                    {{-- <a class="bg-gradient-to-r from-green-900 to-green-400 px-6 py-2 rounded-md hover:scale-110 focus:outline-none focus:ring-2 text-white font-bold tracking-wider"
                        href="https://wa.me/6282127570507?text=Halo,%20saya%20ingin%20menanyakan%20ketersediaan%20gedung%20{{ $building->name }}">
                        Pesan Sekarang</a> --}}
                    <a class="bg-gradient-to-r from-green-900 to-green-400 px-6 py-2 rounded-md hover:scale-110 focus:outline-none focus:ring-2 text-white font-bold tracking-wider"
                        href="https://wa.me/6282127570507?
                        text=Halo, saya ingin menanyakan ketersediaan Gedung RBI%0Apada tanggal (isi tanggal)%0A
                        %0AFORMAT BOOKING GEDUNG
                        %0ANama Lengkap Penyewa: 
                        %0ANama Gedung: {{ $building->name }}
                        %0AHari/tanggal: 
                        %0AUntuk Kegiatan: 
                        %0AJumlah Orang:
                        ">
                        Pesan Sekarang</a>
                </div>
                <div class="flex flex-col text-center font-light text-xs text-red-600 py-5">
                    <p>*Pesanan hanya dapat dilakukan melalui Whatsaap resmi BMTI.</p>
                    <p>*Transaksi hanya melalui rekening resmi BMTI. bukan rekening pribadi Admin atau pekerja kantor</p>
                </div>
            </div>

            <x-whatsapp-admin></x-whatsapp-admin>
        </main>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bagian Kalender (FullCalendar )
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: '',
                    center: 'title',
                    right: 'prev,next'
                },
                events: [{
                        title: 'Disewa',
                        start: '2024-11-25',
                        end: '2024-11-31',
                    },
                    {
                        title: 'Disewa Malam',
                        start: '2024-11-06',
                        end: '2024-11-06',
                    },
                    {
                        title: 'Disewa Malam',
                        start: '2024-09-28',
                        end: '2024-09-28',
                    },
                    {
                        title: 'Disewa Penuh Hari',
                        start: '2024-09-30',
                        end: '2024-09-30',
                    },
                    {
                        title: 'Disewa',
                        start: '2024-11-15',
                        end: '2024-11-17',
                    },
                    {
                        title: 'Disewa',
                        start: '2024-10-15',
                        end: '2024-10-15',
                    },
                ],
                dateClick: function(info) {
                    const event = calendar.getEvents().find(event => event.startStr === info.dateStr);
                    if (event) {
                        showTooltip(info.jsEvent.clientX, info.jsEvent.clientY, event.title);
                    }
                }
            });

            calendar.render();

            // Menampilkan tooltip
            function showTooltip(x, y, text) {
                const tooltip = document.createElement('div');
                tooltip.className = 'absolute bg-gray-700 text-white text-sm rounded p-1';
                tooltip.innerText = text;
                document.body.appendChild(tooltip);

                tooltip.style.left = `${x}px`;
                tooltip.style.top = `${y - 30}px`;

                setTimeout(() => {
                    tooltip.remove();
                }, 2000); // Tooltip hilang setelah 2 detik
            }

            // Bagian Galeri Gambar
            const mainImage = document.getElementById('mainImage');
            const smallImages = document.querySelectorAll('#smallImages img');
            const photoGallery = document.getElementById('smallImages');
            const scrollLeftBtn = document.querySelector('.scroll-left');
            const scrollRightBtn = document.querySelector('.scroll-right');

            let currentPosition = 0;
            const imageWidth = smallImages[0].offsetWidth + 16; // Lebar gambar termasuk margin
            let imagesPerPage = Math.floor(photoGallery.offsetWidth /
                imageWidth); // Jumlah gambar kecil berdasarkan ukuran layar
            const totalImages = smallImages.length;

            // Fungsi untuk scroll galeri
            function scrollGallery(direction) {
                const maxPosition = totalImages - imagesPerPage;
                currentPosition = Math.max(0, Math.min(maxPosition, currentPosition + direction));
                const offset = currentPosition * -imageWidth;
                photoGallery.style.transform = `translateX(${offset}px)`;
            }

            // Tombol scroll kiri
            scrollLeftBtn.addEventListener('click', function() {
                scrollGallery(-1);
            });

            // Tombol scroll kanan
            scrollRightBtn.addEventListener('click', function() {
                scrollGallery(1);
            });

            // Saat window di-resize, hitung ulang jumlah gambar per halaman
            window.addEventListener('resize', function() {
                imagesPerPage = Math.floor(photoGallery.offsetWidth / imageWidth);
                currentPosition = Math.min(currentPosition, totalImages - imagesPerPage);
                scrollGallery(0); // Update tampilan saat resize
            });

            // Update gambar utama saat klik gambar kecil
            smallImages.forEach(function(img) {
                img.addEventListener('click', function() {
                    const newSrc = img.getAttribute('data-src');
                    mainImage.setAttribute('src', newSrc);
                });
            });

            // Menampilkan pop-up saat mengarahkan kursor ke gambar
            smallImages.forEach(function(img) {
                img.addEventListener('mouseover', function() {
                    const newSrc = img.getAttribute('data-src');
                    mainImage.setAttribute('src', newSrc);

                    // Menempatkan tooltip di atas gambar
                    const rect = image.getBoundingClientRect();
                    tooltip.style.left = `${rect.left + window.scrollX}px`;
                    tooltip.style.top = `${rect.top + window.scrollY - 25}px`;

                    // Menghapus tooltip saat kursor keluar
                    image.addEventListener('mouseleave', function() {
                        tooltip.remove();
                    });

                });
            });
        });
    </script>
@endsection
