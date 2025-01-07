@extends('layouts.user')

@section('title', 'User | List Booking Pancaniti')

@section('content')
    <div class="items-center mt-20 hidden md:block">
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
        <main class="w-full">
            <!-- Bagian Gambar dan Jadwal sewa -->
            <div class="w-full flex flex-col md:flex-row md:px-10 justify-center gap-6 ">
                <!--Bagian Gambar-->
                <div class="w-full md:w-3/5 bg-gradient-to-r from-white-500 to-indigo-500 p-6 rounded-lg md:shadow-lg">
                    <p class="md:text-2xl font-bold pb-5">Galeri Bale Pancaniti</p>
                    <div class="w-2xl">
                        <img id="mainImage" src="/img/pancaniti/p (1).JPG" alt="Foto Gedung"
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
                            <img src="/img/pancaniti/p (1).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (1).jpg">
                            <img src="/img/pancaniti/p (7).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (7).jpg">
                            <img src="/img/pancaniti/p (11).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (11).jpg">
                            <img src="/img/pancaniti/p (12).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (12).jpg">
                            <img src="/img/pancaniti/p (15).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (15).jpg">
                            <img src="/img/pancaniti/p (19).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (19).jpg">
                            <img src="/img/pancaniti/p (23).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (23).jpg">
                            <img src="/img/pancaniti/p (28).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (28).jpg">
                            <img src="/img/pancaniti/p (29).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (29).jpg">
                            <img src="/img/pancaniti/p (32).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (32).jpg">
                            <img src="/img/pancaniti/p (34).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (34).jpg">
                            <img src="/img/pancaniti/p (38).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (38).jpg">
                            <img src="/img/pancaniti/p (40).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (40).jpg">
                            <img src="/img/pancaniti/p (52).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (52).jpg">
                            <img src="/img/pancaniti/p (53).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (53).jpg">
                            <img src="/img/pancaniti/p (55).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (55).jpg">
                            <img src="/img/pancaniti/p (57).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (57).jpg">
                            <img src="/img/pancaniti/p (58).jpg" alt="Foto 1"
                                class="md:w-24 md:h-24 w-20 h-16 rounded-sm cursor-pointer md:hover:scale-105 transition-transform duration-300"
                                data-src="/img/pancaniti/p (58).jpg">
                        </div>
                        <!-- Tombol Scroll Kanan -->
                        <button
                            class="md:block hidden scroll-right absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white text-2xl p-2 rounded-full hover:bg-opacity-75 z-10">
                            &#8250;
                        </button>
                    </div>
                </div>
                <!-- Bagian Kalender -->
                <div class="w-full md:w-2/5 md:shadow-lg rounded-lg p-6">
                    <h2 class="md:text-2xl font-bold pb-5">Jadwal Bale Pancaniti</h2>
                    <div id='calendarpancaniti' class="w-full md:h-5/6 h-80 bg-gray-200 p-3 rounded-lg"></div>
                </div>


                <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
                <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
                <!-- JavaScript untuk FullCalendar -->
            </div>

            <!-- Bagian Deskripsi dan fasilitas -->
            <div class=" md:px-10 flex flex-col md:flex-row justify-between md:gap-6">
                <!-- Deskripsi -->
                <div
                    class="w-full flex flex-col md:flex-row md:gap-10 gap-5 md:w-full md:shadow-lg rounded-lg md:py-6 px-6 py-3">
                    <div class="md:w-4/5">
                        <p class="text-xl font-bold ">Deskripsi Bale Pancaniti</p>
                        <div class=" rounded-lg text-justify center">
                            <p class="py-3 max-h-[350px] md:text-base text-xs overflow-hidden">
                                Gedung Pancaniti di BBPPMPV BMTI Cimahi adalah salah satu fasilitas unggulan yang memiliki
                                desain modern dan multifungsi, yang dibangun untuk mendukung berbagai kegiatan pelatihan,
                                seminar, workshop, hingga pertemuan besar yang diadakan oleh lembaga atau instansi terkait.
                                Gedung ini dibekali dengan fasilitas yang sangat mendukung kenyamanan dan efisiensi acara,
                                di antaranya ruang yang luas dan nyaman, sistem pendingin ruangan yang dapat menyesuaikan
                                kebutuhan, serta area parkir yang memadai untuk kenyamanan pengunjung.

                                Dibangun dengan konsep terbuka dan fleksibel, Gedung Pancaniti dapat diatur sedemikian rupa
                                untuk memenuhi berbagai jenis acara, baik itu acara besar seperti konferensi maupun acara
                                kecil yang lebih intim. Untuk mendukung kelancaran acara, gedung ini dilengkapi dengan
                                fasilitas audio-visual yang modern, sistem pencahayaan yang dapat disesuaikan, serta akses
                                internet berkecepatan tinggi untuk mendukung kebutuhan presentasi atau kegiatan daring.

                                Lokasinya yang strategis di dalam kompleks BBPPMPV BMTI, dikelilingi oleh area hijau yang
                                asri, menciptakan suasana yang tenang dan kondusif untuk kegiatan belajar dan berbagi ilmu.
                                Ruang-ruang di Gedung Pancaniti juga dirancang dengan memperhatikan kenyamanan peserta,
                                dengan kursi ergonomis, sistem tata suara yang jelas, dan pengaturan ruang yang memungkinkan
                                interaksi antar peserta dengan fasilitator atau narasumber berjalan lancar.

                                Dengan kapasitas yang cukup besar dan desain yang efisien, Gedung Pancaniti juga dilengkapi
                                dengan fasilitas pendukung lainnya seperti ruang istirahat, toilet bersih, dan area makan
                                yang nyaman. Semua fasilitas ini menjadikan Gedung Pancaniti pilihan utama untuk berbagai
                                kegiatan yang membutuhkan ruang yang mendukung interaksi, kolaborasi, dan produktivitas
                                tinggi.

                                Selain itu, Gedung Pancaniti juga sangat cocok digunakan untuk kegiatan yang melibatkan
                                peserta dari berbagai latar belakang, baik yang berasal dari instansi pemerintah, lembaga
                                pendidikan, maupun sektor swasta. Dengan suasana yang kondusif dan fasilitas lengkap, Gedung
                                Pancaniti menjadi tempat yang ideal untuk acara-acara yang membutuhkan perhatian penuh pada
                                kualitas pelaksanaan, serta memberikan kenyamanan maksimal bagi setiap peserta yang hadir.
                            </p>
                        </div>
                    </div>
                    <div class="md:w-2/5">
                        <h2 class="text-xl font-bold">Harga Sewa Bale Pancaniti</h2>
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
                                    <td class="px-1 py-2 text-sm">Rp. 15.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 class="text-xl font-bold py-5 ">Fasilitas</h2>
                        <table
                            class="flex text-justify items-center bg-gradient-to-r from-white-500 to-indigo-500 text-sm md:text-base">
                            <tr>
                                <td><i class="fas fa-user fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Kapasitas</td>
                                <td>: 1000 Orang</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-couch fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Ruang Acara</td>
                                <td>: 1</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-snowflake fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>AC</td>
                                <td>: Ada</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-wifi fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Wi-Fi</td>
                                <td>: Ada</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-car fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Tempat Parkir</td>
                                <td>: Ada</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-restroom fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>Toilet</td>
                                <td>: 4</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-door-closed fa-sm text-blue-500 mr-5 px-3 w-4 h-4"></i></td>
                                <td>VIP Room</td>
                                <td>: 1</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Fasilitas -->

            <div class="px-10">
                <div class="flex justify-center mt-10">
                    <a class="bg-gradient-to-r from-green-900 to-green-400 px-6 py-2 rounded-md hover:scale-110 focus:outline-none focus:ring-2 text-white font-bold tracking-wider"
                        href="https://wa.me/628112242326?
                        text=Halo, saya ingin menanyakan ketersediaan Gedung RBI%0Apada tanggal (isi tanggal)%0A
                        %0AFORMAT BOOKING GEDUNG
                        %0ANama Lengkap Penyewa: 
                        %0ANama Gedung: gada
                        %0AHari/tanggal: 
                        %0AUntuk Kegiatan: 
                        %0AJumlah Orang:
                        ">
                        Pesan Sekarang</a>
                </div>
                <div class="flex flex-col text-center font-light text-xs text-red-600 py-5">
                    <p>*Pesanan hanya dapat dilakukan melalui Whatsaap resmi BMTI.</p>
                    <p>*Transaksi hanya melalui rekening resmi BMTI. bukan rekening pribadi Admin atau pekerja kantor
                    </p>
                </div>
            </div>

        </main>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bagian Kalender (FullCalendar )
            var calendarEl = document.getElementById('calendarpancaniti');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: @json($calendarBookingsPancaniti),
                eventClick: function(info) {
                    var bookingpancaniti = info.event.extendedProps;
                    document.getElementById('bookingId').value = info.event.id;
                    document.getElementById('nama_pengguna').value = bookingpancaniti.nama_pengguna;
                    document.getElementById('nama_kegiatan').value = info.event.title;
                    document.getElementById('waktu_penggunaan').value = bookingpancaniti
                        .waktu_penggunaan;

                    $('#bookingModal').modal('show');
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

        });
    </script>
@endsection
