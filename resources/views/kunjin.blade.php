<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Pelayanan Kunjungan Industri</x-header>

    <body>
        <main class="pt-10 mx-auto" x-data="{ isOpen: false }">
            <!-- Hero Section -->
            <section class="relative text-center rounded-lg animate-bounce">
                <button type="button"
                    class="inline-block px-6 md:px-5 py-3 bg-gradient-to-br from-blue-900 to-blue-500 text-blue-200 font-bold rounded-full shadow-md hover:bg-green-600 hover:text-white transition-transform transform hover:scale-105 relative z-10"
                    @click="isOpen = !isOpen; $nextTick(() => { if(isOpen) document.getElementById('form-pendaftaran').scrollIntoView({ behavior: 'smooth' }); })">
                    Daftar Sekarang
                </button>
            </section>

            {{-- notif succsess --}}
            @if (session('success'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                    class="fixed top-4 left-1/2 transform -translate-x-1/2 md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg z-50">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                    class="fixed top-4 left-1/2 transform -translate-x-1/2 md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2 bg-red-500 text-white px-6 py-4 rounded-lg shadow-lg z-50">
                    {{ session('error') }}
                </div>
            @endif

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
                                Email Instansi
                            </label>
                            <input type="email" id="email" placeholder="Masukkan email Anda" name="email"
                                class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                                required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_sekolah">
                                Nama Sekolah/Nama Perguruan Tinggi
                            </label>
                            <input type="text" id="nama_sekolah" placeholder="Nama Sekolah atau Perguruan Tinggi"
                                name="nama_sekolah"
                                class="shadow-lg border-2 border-blue-300 rounded-lg w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:border-purple-400 transition duration-300 ease-in-out transform hover:scale-105"
                                required>
                        </div>

                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nama_pic">
                                Nama PIC/Contact Person
                            </label>
                            <input type="text" id="nama_pic" placeholder="Nama PIC atau Contact Person"
                                name="nama_pic"
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
            <section id="layanan" class="p-8 my-12 lg:px-40"></section>
            <h3 class="text-3xl font-extrabold text-center mb-6">Layanan Kami</h3>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Kolom Kiri -->
                <div class="space-y-6">
                    <div
                        class="bg-gradient-to-r from-purple-400 to-blue-400 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg p-2 mb-4">
                            <h4 class="text-xl font-bold text-white">Persyaratan Administrasi</h4>
                        </div>
                        <p class="mb-2 text-white">Untuk melakukan kunjungan, berikut adalah persyaratannya:</p>
                        <ol class="list-decimal list-inside text-white">
                            <li>Surat Permohonan Kunjungan</li>
                            <li>Surat Balasan Permohonan Kunjungan</li>
                        </ol>
                    </div>

                    <div
                        class="bg-gradient-to-r from-green-400 to-teal-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <div class="bg-gradient-to-r from-green-600 to-teal-600 rounded-lg p-2 mb-4">
                            <h4 class="text-xl font-bold text-white">Prosedur Layanan</h4>
                        </div>
                        <p class="mb-2 text-white">Berikut adalah prosedur untuk melakukan kunjungan:</p>
                        <ol class="list-decimal list-inside text-white">
                            <li>Instansi mengajukan surat permohonan kunjungan.</li>
                            <li>BBPPMV BMTI memverifikasi surat ajuan dari instansi pemohon.</li>
                            <li>BBPPMV BMTI memproses surat balasan persetujuan jika sudah terverifikasi dan dapat
                                diterima sesuai permohonan atau waktu kunjungan.</li>
                            <li>Instansi dapat berkunjung sesuai jadwal yang disepakati.</li>
                        </ol>
                    </div>

                    <div
                        class="bg-gradient-to-r from-red-400 to-pink-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="text-white bg-gradient-to-r font-bold from-red-600 to-pink-600 rounded-lg p-2 mb-4">
                            Biaya
                        </h4>
                        <p class="mb-2 text-white">Biaya untuk kunjungan:</p>
                        <ul class="list-disc list-inside text-white">
                            <li>Tidak berbayar atau GRATIS.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-6">
                    <div
                        class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4
                            class="text-white bg-gradient-to-r font-bold from-yellow-600 to-orange-600 rounded-lg p-2 mb-4">
                            Produk Layanan</h4>
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

                    <div
                        class="bg-gradient-to-r from-indigo-400 to-blue-600 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4
                            class="text-white bg-gradient-to-r font-bold from-indigo-600 to-blue-600 rounded-lg p-2 mb-4">
                            Jangka Waktu Pelayanan</h4>
                        <p class="mb-2 text-white">Berikut adalah jangka waktu untuk layanan kami:</p>
                        <ul class="list-disc list-inside text-white">
                            <li>Jangka waktu penyelesaian surat permohonan kunjungan adalah 7 hari kerja.</li>
                            <li>Waktu pelayanan kunjungan adalah Senin sampai dengan Jumat mulai pukul 08:00 - 15:00
                                WIB.</li>
                        </ul>
                    </div>
                </div>
            </div>
            </section>

            <!-- Galeri Section -->
            <section class="p-8 mx-4 my-12 bg-white text-blue-900 animate-slide-up">
                <h3 class="text-3xl font-extrabold text-center mb-16">Galeri Kegiatan</h3>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 max-w-full">
                    <img src="img/kunjin/kn (1).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 1">
                    <img src="img/kunjin/kn (2).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 2">
                    <img src="img/kunjin/kn (3).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (5).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (6).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (7).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (8).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (9).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (10).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                    <img src="img/kunjin/kn (11).jpg"
                        class="rounded-lg shadow-md w-[500px] h-[200px] transform hover:scale-105 transition duration-300"
                        alt="Foto Kegiatan 3">
                </div>
            </section>
        </main>
    </body>
</x-layout>
