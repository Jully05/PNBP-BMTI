<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Kunjungan Industri</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 0) { // Ketika scroll lebih dari 0px
                navbar.classList.add('bg-blue-500'); // Menambahkan warna biru pekat
            } else {
                navbar.classList.remove('bg-blue-500'); // Menghilangkan warna biru pekat saat kembali ke atas
            }
        });
        // Fungsi untuk mendeteksi scroll
        window.addEventListener('scroll', function() {
            const whatsappBtn = document.getElementById('whatsappBtn');
            if (window.scrollY > 500) { // Menampilkan tombol setelah scroll 500px
                whatsappBtn.classList.add('show');
            } else {
                whatsappBtn.classList.remove('show');
            }
        });
    </script>
</head>
<div class="fixed top-0 left-0 w-full z-50 bg-blue-200">
    <x-navbar>
      </x-navbar>
  </div>
<body class="bg-gradient-to-br from-blue-900 to-blue-500 text-gray-100">

    <main class="pt-24 mx-auto" x-data="{ isOpen: false }">
        <!-- Hero Section -->
        <section class="relative text-center py-20 bg-gradient-to-b from-blue-900 to-transparent rounded-lg shadow-2xl">
            <div class="absolute inset-0">
                <img src="/img/background.jpg" alt="" class="w-full h-full object-cover opacity-30">
            </div>
            <div class="px-40">
                <h2 class="text-5xl font-extrabold mb-6 relative z-10 animate-fade-in text-white">Kunjungan Study Tour di BBPPMV BMTI</h2>
                <p class="text-xl mb-8 relative z-10 opacity-90 text-white">BBPPMB BMTI menerima kunjungan studi dari sekolah dan kampus untuk memberikan edukasi tentang tugas BBPPMB BMTI, termasuk pengelolaan pendidikan vokasi dan pengembangan kompetensi. Kunjungan ini gratis dan bertujuan meningkatkan wawasan tentang peran BBPPMB BMTI dalam peningkatan kualitas pendidikan di Indonesia.</p>
            </div>
            <button type="button" @click="isOpen = !isOpen; $nextTick(() => { if(isOpen) document.getElementById('form-pendaftaran').scrollIntoView({ behavior: 'smooth' }); })" class="inline-block px-8 py-3 bg-white text-blue-900 font-bold rounded-full shadow-md hover:bg-gray-200 transition-transform transform hover:scale-105 relative z-10">Daftar Sekarang</button>
        </section>

        <!-- Form Pendaftaran -->
<section id="form-pendaftaran" class="mt-10" x-show="isOpen">
    <h3 class="text-4xl font-extrabold text-center  mb-8 animate-bounce">
        Form Pendaftaran Kunjungan Industri
    </h3>

    <div class="max-w-lg mx-auto bg-gradient-to-r from-blue-100 to-purple-100 p-10 rounded-2xl shadow-xl">
        <form method="POST" action="{{ route('kunjin.store') }}" enctype="multipart/form-data">
            @csrf 
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input type="email" id="email" placeholder="Masukkan email Anda" name="email"
                    class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_sekolah">
                    Nama Sekolah/Nama Perguruan Tinggi
                </label>
                <input type="text" id="nama_sekolah" placeholder="Nama Sekolah atau Perguruan Tinggi" name="nama_sekolah"
                    class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_pic">
                    Nama PIC/Contact Person
                </label>
                <input type="text" id="nama_pic" placeholder="Nama PIC atau Contact Person" name="nama_pic"
                    class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                    required>
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nomor_hp">
                    Nomor HP Aktif
                </label>
                <input type="text" id="nomor_hp" placeholder="Nomor HP Aktif" name="nomor_hp"
                    class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                    required>
            </div>

            <button type="submit"
                class="w-full bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-bold py-3 px-4 rounded-lg shadow-lg focus:outline-none focus:shadow-outline transition-transform duration-300 ease-in-out transform hover:scale-110">
                Daftar
            </button>
        </form>
    </div>
</section>

        
        <!-- Layanan Section -->
        <section id="layanan" class="p-8 my-12 px-40">
            <h3 class="text-3xl font-extrabold text-center mb-6 ">Layanan Kami</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Kolom Kiri -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-purple-400 to-blue-400 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg p-2 mb-4">
                            <h4 class="text-xl font-bold text-white">Persyaratan Administrasi</h4>
                        </div>
                        <p class="mb-2 text-white">Untuk melakukan kunjungan, berikut adalah persyaratannya:</p>
                        <ol class="list-decimal list-inside text-white">
                            <li>Surat Permohonan Kunjungan</li>
                            <li>Surat Balasan Permohonan Kunjungan</li>
                        </ol>
                    </div>

                    <div class="bg-gradient-to-r from-green-400 to-teal-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-green-600 to-teal-600 rounded-lg p-2 mb-4">
                            <h4 class="text-xl font-bold text-white">Prosedur Layanan</h4>
                        </div>
                        <p class="mb-2 text-white">Berikut adalah prosedur untuk melakukan kunjungan:</p>
                        <ol class="list-decimal list-inside text-white">
                            <li>Instansi mengajukan surat permohonan kunjungan.</li>
                            <li>BBPPMV BMTI memverifikasi surat ajuan dari instansi pemohon.</li>
                            <li>BBPPMV BMTI memproses surat balasan persetujuan jika sudah terverifikasi dan dapat diterima sesuai permohonan atau waktu kunjungan.</li>
                            <li>Instansi dapat berkunjung sesuai jadwal yang disepakati.</li>
                        </ol>
                    </div>

                    <div class="bg-gradient-to-r from-red-400 to-pink-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="bg-gradient-to-r font-bold from-red-600 to-pink-600 rounded-lg p-2 mb-4">Biaya</h4>
                        <p class="mb-2 text-white">Biaya untuk kunjungan:</p>
                        <ul class="list-disc list-inside text-white">
                            <li>Tidak berbayar atau GRATIS.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="bg-gradient-to-r font-bold from-yellow-600 to-orange-600 rounded-lg p-2 mb-4">Produk Layanan</h4>
                        <p class="mb-2 text-white">Kami menawarkan berbagai produk layanan termasuk:</p>
                        <ul class="list-disc list-inside text-white">
                            <li>Program Keahlian Teknik Mesin</li>
                            <li>Program Keahlian Las dan Fabrikasi Logam</li>
                            <li>Program Keahlian Ketenagalistrikan</li>
                            <li>Program Keahlian Otomotif</li>
                            <li>Program Keahlian Teknik Energi Terbarukan</li>
                            <li>Program Keahlian Teknik Sipil dan Perencanaan</li>
                            <li>Program Keahlian Elektronika dan Informatika</li>
                            <li>Program Pengajaran Umum</li>
                            <li>Tim-tim di bawah Bagian Tata Usaha</li>
                        </ul>
                    </div>

                    <div class="bg-gradient-to-r from-indigo-400 to-blue-600 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="bg-gradient-to-r font-bold from-indigo-600 to-blue-600 rounded-lg p-2 mb-4">Jangka Waktu Pelayanan</h4>
                        <p class="mb-2 text-white">Berikut adalah jangka waktu untuk layanan kami:</p>
                        <ul class="list-disc list-inside text-white">
                            <li>Jangka waktu penyelesaian surat permohonan kunjungan adalah 7 hari kerja.</li>
                            <li>Waktu pelayanan kunjungan adalah Senin sampai dengan Jumat mulai pukul 08:00 - 15:00 WIB.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Galeri Section -->
        <section class="p-8 mx-4 rounded-lg shadow-lg my-12 bg-white text-blue-900 animate-slide-up">
            <h3 class="text-3xl font-extrabold text-center mb-6">Galeri Kegiatan</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5 max-w-full">
                <img src="https://via.placeholder.com/300" class="rounded-lg shadow-md transform hover:scale-105 transition duration-300" alt="Foto Kegiatan 1">
                <img src="https://via.placeholder.com/300" class="rounded-lg shadow-md transform hover:scale-105 transition duration-300" alt="Foto Kegiatan 2">
                <img src="https://via.placeholder.com/300" class="rounded-lg shadow-md transform hover:scale-105 transition duration-300" alt="Foto Kegiatan 3">
                <img src="https://via.placeholder.com/300" class="rounded-lg shadow-md transform hover:scale-105 transition duration-300" alt="Foto Kegiatan 3">
            </div>
        </section>      
    </main>

    <footer class="from-blue-900 to-blue-500 text white h-[250px] md:h-[180px] ">
        <div class="flex flex-col md:flex-row text-center justify-center md:gap-12 gap-1 w-300px">
            <a href="" class="hover:text-blue-500 md:text-sm text-xs font-semibold leading-6 ">Privacy</a>
            <a href="" class="hover:text-blue-500 md:text-sm text-xs font-semibold leading-6 ">Blog</a>
            <a href="" class="hover:text-blue-500 md:text-sm text-xs font-semibold leading-6 ">Tentang
                Kami</a>
            <a href="" class="hover:text-blue-500 md:text-sm text-xs font-semibold leading-6 ">Ketentuan
                Layanan</a>
            <a href="https://wa.me/628112242326"
                class="hover:text-blue-500 md:text-sm text-xs font-semibold leading-6 ">Hubungi
                Kami</a>
        </div>
        <div class="flex justify-center gap-3 md:py-10 pt-5">
            <a href="https://www.facebook.com/bmti.kemdikbud/" target="_blank" class=" hover:text-blue-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </a>
            <a href="https://www.instagram.com/bmti.kemdikbud/" target="_blank" class="hover:text-blue-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="https://x.com/bmti_kemdikbud" target="_blank" class=" hover:text-blue-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                    </path>
                </svg>
            </a>
        </div>
        <p class="mt-5 md:mt-0 md:text-base text-xs text-center ">
            © 2024 BBPPMPV BMTI, Inc. All rights reserved.
        </p>
    </footer>
</body>
</html>
