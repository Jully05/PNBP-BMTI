<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Layanan Magang ( PKL )</x-header>

    <div class="min-h-full md:px-10 pt-10">
        <main>
            <div class="flex flex-col md:flex-row justify-center gap-10 md:gap-0 ">
                <!-- Gambar di sebelah kiri -->
                <div class="w-full md:w-1/2 px-5 ">
                    <div id="magang-images" class="flex justify-center py-2 md:py-6">
                        <div class="w-full h-72 md:h-96 relative">
                            <img src="img/headerimg6.jpg" alt=""
                                class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-100 rounded-lg"
                                id="image1">
                            <img src="img/headerimg5.png" alt=""
                                class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0 rounded-lg"
                                id="image2">
                            <img src="img/headerimg4.png" alt=""
                                class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0 rounded-lg"
                                id="image3">
                            <img src="img/headerimg3.jpeg" alt=""
                                class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0 rounded-lg"
                                id="image3">
                            <img src="img/headerimg2.jpg" alt=""
                                class="w-full h-full object-cover absolute transition-opacity duration-1000 opacity-0 rounded-lg"
                                id="image3">
                        </div>
                    </div>
                </div>
            
                <div class="w-full md:w-1/2 flex flex-col gap-5 ">
                    <div class="md:h-[400px] flex justify-center items-center">
                        <div class="bg-gradient-to-r from-blue-400 to-indigo-500 w-[90%] mt-7 h-[96%] px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1 class="text-white bg-gradient-to-r mt-3 from-teal-400 to-blue-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl md:text-xl">
                                    Layanan Magang (PKL) BBPPMPV BMTI</h1>
                                <p class="md:text-base text-sm text-white">Selamat datang di program Praktik Kerja Lapangan (PKL) di
                                    Balai
                                    Besar
                                    Pengembangan
                                    Penjaminan Mutu Pendidikan Vokasi Bidang Mesin dan Teknik Industri (BBPPMPV MTI).
                                    Kami memberikan kesempatan kepada siswa/mahasiswa untuk mendapatkan pengalaman
                                    langsung di dunia kerja melalui program PKL yang dirancang untuk memperkuat
                                    keterampilan dan pengetahuan di bidang teknik industri dan mesin.</p>
                                <p class="md:text-base text-sm text-white">PKL di BBPPMPV MTI adalah program magang
                                     untuk siswa SMK, mahasiswa D3, dan S1 yang ingin mendalami teknik mesin, elektro, dan teknologi industri. Peserta akan belajar langsung di lingkungan profesional dengan bimbingan ahli berpengalaman.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-center mt-10 gap-5 md:gap-5">
                <!-- Persyaratan Administrasi -->
                <div class="md:w-[50%] md:h-[400px] flex justify-center items-center focus:outline-none focus:ring-2">
                    <div class="bg-gradient-to-r from-blue-600 to-teal-500 w-[90%] h-full px-4 py-6 shadow-2xl rounded-lg">
                        <div class="flex flex-col item-center justify-center text-justify gap-3">
                            <h1 class="text-white bg-gradient-to-r from-teal-400 to-blue-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl md:text-2xl">
                                Persyaratan Administrasi
                            </h1>
                            <ul class="list-decimal md:mx-5 flex flex-col gap-4 mt-5 text-sm md:text-xl px-5 pb-10 text-white">
                                <li>Terdaftar dalam surat pemanggilan</li>
                                <li>Membuat proposal sesuai dengan jurusan yang ada di sekolah</li>
                                <li>Mengisi biodata dan menyerahkan pas foto 3x4 sebanyak 2 lembar</li>
                                <li>Menyerahkan laporan kegiatan selama PKL/ Prakerin / Penelitian Magang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <!-- Sistem, Mekanisme dan Prosedur Pekayaan -->
                <div class="md:w-[50%] md:h-[400px] flex justify-center items-center focus:outline-none focus:ring-2">
                    <div class="bg-gradient-to-r from-indigo-600 to-teal-500 w-[90%] h-full px-4 py-6 shadow-2xl rounded-lg">
                        <div class="flex flex-col item-center justify-center text-justify gap-3">
                            <h1 class="text-white bg-gradient-to-r from-teal-400 to-indigo-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl">
                                Sistem, Mekanisme dan Prosedur Pekayaan
                            </h1>
                            <ul class="list-decimal md:mx-5 flex flex-col gap-4 mt-5 text-sm md:text-xl px-5 pb-10 text-white">
                                <li>Sekolah/Universitas/ Perguruan tinggi mengajukan surat permohonan dan melampirkan proposal.</li>
                                <li>BBPPMV BMTI memproses surat balasan ke pihak pemohon.</li>
                                <li>Siswa memulai kegiatan PKL di BBPPMV BMTI</li>
                                <li>Surat Keterangan/ sertifikat keluar bila laporan PKL sudah selesai</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Jangka Waktu Penyelesaian -->
            <div class="flex flex-col md:flex-row justify-center md:mt-0 mt-5 md:gap-5 gap-5">
                <div class="md:w-[50%] md:h-[400px] flex justify-center items-center focus:outline-none focus:ring-2">
                    <div class="bg-gradient-to-r from-indigo-600 to-teal-500 w-[90%] px-4 py-6 shadow-2xl rounded-lg">
                        <div class="flex flex-col item-center justify-center text-justify gap-3">
                            <h1 class="text-white bg-gradient-to-r from-teal-400 to-indigo-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl">
                                Jangka Waktu Penyelesaian
                            </h1>
                            <ul class="list-disc md:mx-5 flex flex-col gap-4 mt-5 text-sm md:text-xl px-5 pb-5 text-white">
                                <li>5 hari kerja untuk surat jawaban permohonan PKL</li>
                                <li>7 hari untuk penerbitan sertifikat (bila laporan sudah diterima oleh kepala unit tempat peserta magang)</li>
                                <li>1 bulan untuk penyerahan surat keterangan sertifikat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            
                <!-- Produk Layanan -->
                <div class="md:w-[50%] md:h-[400px] flex justify-center items-center focus:outline-none focus:ring-2">
                    <div class="bg-gradient-to-r from-indigo-600 to-teal-500 w-[90%] px-4 py-6 shadow-2xl rounded-lg">
                        <div class="flex flex-col item-center justify-center text-justify gap-3">
                            <h1 class="text-white bg-gradient-to-r from-teal-400 to-indigo-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl">
                                Produk Layanan
                            </h1>
                            <div class="text-sm md:text-xl mt-5 flex flex-col gap-2 pb-5 text-white">
                                <h1>Pelaksanaan PKL/Prakerin</h1>
                                <h1>Penelitian/Magang</h1>
                            </div>
                            <h1 class="text-white mt-7 bg-gradient-to-r from-teal-400 to-indigo-500 text-center py-3 px-6 rounded-lg shadow-xl font-semibold text-xl">
                                Biaya
                            </h1>
                            <h1 class="text-sm md:text-xl pb-5 pt-3 text-white">Tidak Berbayar ( GRATIS! )</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" w-full flex flex-col h-auto justify-center items-center" x-data="{ isOpen: false }">
                <div class="text-center md:py-10 pt-20 font-bold md:text-3xl text-2xl text-white">
                    <h1>Daftar PKL Online</h1>
                </div>
                <div class="flex flex-col justify-center pt-10 md:pt-0">
                    <button type="button"
                        @click="isOpen = !isOpen; $nextTick(() => { if(isOpen) document.getElementById('form-pendaftaran').scrollIntoView({ behavior: 'smooth' }); })"
                        class="bg-gradient-to-r from-blue-500 to-teal-400  px-6 py-2 rounded-md hover:scale-110 focus:outline-none focus:ring-2 text-white font-bold tracking-wider"
                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        Daftar Online Sekarang
                    </button>
                </div>

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

                {{-- form pendaftaran --}}
                <div x-show="isOpen" id="form-pendaftaran" class="md:w-auto w-[90%] py-10">
                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="md:py-10 md:flex gap-5">
                            <!-- Biodata -->
                            <div class="p-6 bg-gradient-to-r from-indigo-600 to-teal-500 rounded-lg shadow-inner mb-6 md:mb-0 md:w-[500px]">
                                <h2 class="text-2xl font-semibold mb-6 text-center text-white">Biodata Peserta</h2>
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-white">Nama
                                        Lengkap</label>
                                    <input type="text" id="name" name="name" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                                        placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-white">Alamat
                                        Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                                        placeholder="Masukkan email">
                                </div>
                                <div class="mb-4">
                                    <label for="birthplace" class="block text-sm font-medium text-white">Tempat
                                        Lahir</label>
                                    <input type="text" id="birthplace" name="birthplace" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                                        placeholder="Masukkan tempat lahir">
                                </div>
                                <div class="mb-4">
                                    <label for="birthdate" class="block text-sm font-medium text-white">Tanggal
                                        Lahir</label>
                                    <input type="date" id="birthdate" name="birthdate" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 text-gray-400 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50">
                                </div>
                                <div class="mb-4">
                                    <label for="address"
                                        class="block text-sm font-medium text-white">Alamat</label>
                                    <textarea id="address" name="address" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                                        placeholder="Masukkan alamat lengkap"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="phone" class="block text-sm font-medium text-white">Nomor
                                        HP</label>
                                    <input type="text" id="phone" name="phone" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-purple-50"
                                        placeholder="Masukkan nomor HP">
                                </div>
                            </div>

                            <!-- Informasi Pendidikan -->
                            <div class="p-6 bg-gradient-to-r from-teal-500 to-indigo-600 rounded-lg shadow-inner mb-6 md:mb-0 md:w-[500px]">
                                <h3 class="text-2xl font-semibold mb-6 text-center text-white">Informasi
                                    Pendidikan</h3>
                                <div class="mb-4">
                                    <label for="education_level"
                                        class="block text-sm font-medium text-white">Jenjang
                                        Pendidikan</label>
                                    <input type="text" id="education_level" name="education_level" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                                        placeholder="Masukkan jenjang pendidikan">
                                </div>
                                <div class="mb-4">
                                    <label for="institution" class="block text-sm font-medium text-white">Lembaga
                                        Pendidikan</label>
                                    <input type="text" id="institution" name="institution" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                                        placeholder="Masukkan lembaga pendidikan">
                                </div>
                                <div class="mb-4">
                                    <label for="major" class="block text-sm font-medium text-white">Fakultas /
                                        Jurusan</label>
                                    <input type="text" id="major" name="major" required
                                        class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50"
                                        placeholder="Masukkan fakultas / jurusan">
                                </div>
                                <div class="mb-4">
                                    <label for="upload_letter" class="block text-sm font-medium text-white">Upload
                                        Surat dari
                                        Sekolah/Kampus</label>
                                    <input type="file" id="upload_letter" name="upload_letter"
                                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required
                                        class="mt-1 block w-full border text-gray-200 border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50">
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Daftar -->
                        <div class="text-center">
                            <button type="submit"
                                class="w-1/3 bg-gradient-to-r font-bold from-blue-500 to-teal-400  text-white py-2 rounded-xl shadow-lg hover:scale-110 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 mx-auto transition-transform duration-300">
                                Daftar
                            </button>
                        </div>
                    </form>
                </div>
                <div class="py-10"></div>
            </div>

            <x-whatsapp-admin></x-whatsapp-admin>
        </main>
    </div>
    <script>
        function startImageSlider(imageContainerSelector) {
            let currentImageIndex = 0;
            const images = document.querySelectorAll(imageContainerSelector + " .w-full.h-full.object-cover");

            function showNextImage() {
                images[currentImageIndex].classList.remove("opacity-100");
                images[currentImageIndex].classList.add("opacity-0");

                currentImageIndex = (currentImageIndex + 1) % images.length;

                images[currentImageIndex].classList.remove("opacity-0");
                images[currentImageIndex].classList.add("opacity-100");
            }

            setInterval(showNextImage, 4000); // Ganti gambar setiap 4 detik
        }

        // Initialize sliders for both sections
        startImageSlider('#magang-images');
        startImageSlider('#kunjungan-images');



        const btnPublic = document.getElementById('btn-public');
        const btnNonPublic = document.getElementById('btn-non-public');
        const publicRow = document.getElementById('public-row');
        const nonPublicRow = document.getElementById('non-public-row');

        // Menampilkan "Public" dan menyembunyikan "Non Public" pada awal
        publicRow.style.display = 'block';
        nonPublicRow.style.display = 'none';

        // Event listener untuk tombol Public
        btnPublic.addEventListener('click', function(event) {
            event.preventDefault();
            publicRow.style.display = 'block';
            nonPublicRow.style.display = 'none';

            // Tambahkan kelas aktif ke tombol Public, hilangkan dari Non Public
            btnPublic.classList.add('bg-blue-500', 'text-white');
            btnNonPublic.classList.remove('bg-blue-500', 'text-white');
            btnNonPublic.classList.add('bg-gray-300', 'text-black');

            // Panggil checkScrollButtons untuk Public setelah berganti
            checkScrollButtons(containerPublic, scrollLeftBtnPublic, scrollRightBtnPublic);
        });

        // Event listener untuk tombol Non Public
        btnNonPublic.addEventListener('click', function(event) {
            event.preventDefault();
            publicRow.style.display = 'none';
            nonPublicRow.style.display = 'block';

            // Tambahkan kelas aktif ke tombol Non Public, hilangkan dari Public
            btnNonPublic.classList.add('bg-blue-500', 'text-white');
            btnPublic.classList.remove('bg-blue-500', 'text-white');
            btnPublic.classList.add('bg-gray-300', 'text-black');

            // Panggil checkScrollButtons untuk Non Public setelah berganti
            checkScrollButtons(containerNonPublic, scrollLeftBtnNonPublic, scrollRightBtnNonPublic);
        });

        // Mendapatkan elemen container dan tombol geser untuk Public
        const containerPublic = document.getElementById('building-container');
        const scrollLeftBtnPublic = document.getElementById('scroll-left');
        const scrollRightBtnPublic = document.getElementById('scroll-right');

        // Mendapatkan elemen container dan tombol geser untuk Non Public
        const containerNonPublic = document.getElementById('building-container-non-public');
        const scrollLeftBtnNonPublic = document.getElementById('scroll-left-non-public');
        const scrollRightBtnNonPublic = document.getElementById('scroll-right-non-public');

        // Fungsi untuk menggeser container ke kanan atau kiri
        function scrollContainer(container, direction) {
            container.scrollBy({
                left: direction * 300, // Menggeser 300px setiap kali tombol ditekan
                behavior: 'smooth'
            });
        }

        // Event listener untuk tombol geser Public
        scrollLeftBtnPublic.addEventListener('click', () => scrollContainer(containerPublic, -1));
        scrollRightBtnPublic.addEventListener('click', () => scrollContainer(containerPublic, 1));

        // Event listener untuk tombol geser Non Public
        scrollLeftBtnNonPublic.addEventListener('click', () => scrollContainer(containerNonPublic, -1));
        scrollRightBtnNonPublic.addEventListener('click', () => scrollContainer(containerNonPublic, 1));

        // Fungsi untuk menampilkan atau menyembunyikan tombol geser
        function checkScrollButtons(container, scrollLeftBtn, scrollRightBtn) {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;
            scrollLeftBtn.style.display = container.scrollLeft > 0 ? 'block' : 'none';
            scrollRightBtn.style.display = container.scrollLeft < maxScrollLeft ? 'block' : 'none';
        }

        // Event untuk menampilkan/menghilangkan tombol ketika scrolling
        containerPublic.addEventListener('scroll', () => checkScrollButtons(containerPublic, scrollLeftBtnPublic,
            scrollRightBtnPublic));
        containerNonPublic.addEventListener('scroll', () => checkScrollButtons(containerNonPublic, scrollLeftBtnNonPublic,
            scrollRightBtnNonPublic));

        // Periksa saat halaman dimuat untuk Public dan Non Public
        window.addEventListener('load', () => {
            checkScrollButtons(containerPublic, scrollLeftBtnPublic, scrollRightBtnPublic);
            checkScrollButtons(containerNonPublic, scrollLeftBtnNonPublic, scrollRightBtnNonPublic);
        });
    </script>
</x-layout>
