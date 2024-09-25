<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQdP9kPzQ9GMRRO9boM4rK7Huvm+NTIOVZ76v6IX7DQDmw/nzKfT7u15yB+W6AGZ/xxbkZoT7x1g3YFsg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Tambahan FullCalendar CSS dan JS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/scripts.js') }}"></script>
    <title>Data Gedung</title>
</head>
<body class="h-full bg-white">
    <x-navbar></x-navbar>
    <header class="flex justify-center bg-white">
        <div class="justify-center mx-[]">
        <h1 class="text-1xl md:text-5xl pt-[50px] font-bold pb-[20px] text-center">Gedung Bale Pancawati</h1>
        </div>
    </header>
    <div class="flex md:ml-20 items-center bg-white ">
        <button onclick="window.location.href='/'" class="flex items-center mx-10 bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mr-2 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5l-7 7 7 7" />
            </svg>
            Home 
        </button>        
    </div>
    <div class="min-h-full bg-white flex justify-center">
        <main>
            <!-- Bagian Gambar dan Deskripsi -->
            <div class="max-w-screen-lg flex flex-col md:flex-row justify-between mt-4 mb-6 mx-auto gap-6 mx-10 ">
                <!-- Bagian Gambar -->
                <div class="w-full md:w-1/2 bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl">
                    <p class="text-xl font-extrabold mb-10 ">Galeri </p>
                    <div class="w-2xl ">
                    <img id="mainImage" src="/img/background.jpg" alt="Foto Gedung" class="w-full h-[300px]  ">
                    </div>
                    <div class="relative w-full mt-6 overflow-hidden">
                        <!-- Tombol Scroll Kiri -->
                        <button class="scroll-left absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8249;
                        </button>
                        <!-- Galeri gambar kecil -->
                        <div id="smallImages" class="flex space-x-4 transition-transform duration-300 ">
                            <img src="/img/2.jpeg" alt="Foto 1" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/2.jpeg">
                            <img src="/img/images (1).jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/images (1).jpeg">
                            <img src="/img/background.jpg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/background.jpg">
                            <img src="/img/2.jpeg" alt="Foto 1" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/2.jpeg">
                            <img src="/img/images (1).jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/images (1).jpeg">
                            <img src="/img/background.jpg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/background.jpg">
                            <img src="/img/logo-bmti.png" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/logo-bmti.png">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">                                <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <img src="/img/5.jpeg" alt="Foto 2" class="w-24 h-24 rounded-lg cursor-pointer hover:scale-105 transition-transform duration-300" data-src="/img/5.jpeg">
                            <!-- Tambahkan gambar lainnya sesuai kebutuhan -->
                        </div>
                        <!-- Tombol Scroll Kanan -->
                        <button class="scroll-right absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8250;
                        </button>
                    </div>
                </div>

                <!-- Bagian Deskripsi dan Harga -->
                <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6">
                    <p class="text-xl font-extrabold ">Deskripsi</p>
                    <p class="bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl text-justify center">Gedung Bale Pancawati adalah salah satu venue acara terkemuka yang terletak di lokasi strategis, menawarkan kemudahan akses dan fasilitas lengkap. Dengan desain arsitektur modern yang memadukan estetika dan fungsi, gedung ini cocok untuk berbagai acara, mulai dari pertemuan bisnis hingga acara sosial dan pernikahan.</p>
                    <h2 class="text-xl font-extrabold mt-5 ">Harga</h2>
                    <div class="mt-5 bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl ">
                        <table class="min-w-full bg-white ">
                             <thead>
                                <tr>
                                    <th class="px-4 py-2 bg-gray-200 text-left">Status Pemakaian</th>
                                    <th class="px-4 py-2 bg-gray-200 text-left">Biaya Retribusi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="px-4 py-2">Pagi</td>
                                    <td class="px-4 py-2">Rp. 2.500.000,00</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">Malam</td>
                                    <td class="px-4 py-2">Rp. 5.000.000,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bagian Fasilitas dan Jadwal -->
            <div class="max-w-screen-lg flex flex-col md:flex-row justify-between mt-10 mx-auto gap-6 mb-10 mx-10">
                <!-- Fasilitas -->
                <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-extrabold mb-4 ">Fasilitas</h2>
                    <ul class="bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg shadow-xl text-justify center">
                        <li class="flex items-center">
                            <i class="fas fa-couch fa-sm text-blue-500 mr-2"></i> Ruang Acara: Ruang yang luas dan fleksibel, dapat disesuaikan untuk berbagai jenis acara.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-snowflake fa-sm text-blue-500 mr-2"></i> AC: Sistem pendingin udara yang efisien untuk menjaga suhu ruangan tetap nyaman.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-wifi fa-sm text-blue-500 mr-2"></i> Wi-Fi: Koneksi internet berkecepatan tinggi untuk mendukung kegiatan online.
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-car fa-sm text-blue-500 mr-2"></i> Parkir: Area parkir yang cukup untuk menampung banyak kendaraan.
                        </li>
                    </ul>
                </div>

                <!-- Jadwal Sewa (Kalender) -->
                <div class="w-full md:w-1/2 bg-white shadow-lg rounded-lg p-6">
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
        </main>
    </div>
</body>
</html>
