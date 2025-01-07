<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Layanan Magang (PKL)</x-header>

    <div class="min-h-full md:px-10 pt-10">
        <section id="layanan" class="p-8 my-12 lg:px-40">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Kolom Kiri -->
                <div class="space-y-6 ">
                    <div class="transition-transform transform hover:scale-105 ">
                        <div id="magang-images" class="flex justify-center md:py-6 py-2">
                            <div class="md:w-full w-[95%] md:h-[500px] h-[400px] relative">
                                <img src="img/headerimg6.jpg" alt=""
                                    class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-100"
                                    id="image1">
                                <img src="img/headerimg5.png" alt=""
                                    class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                                    id="image2">
                                <img src="img/headerimg4.png" alt=""
                                    class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                                    id="image3">
                                <img src="img/headerimg3.jpeg" alt=""
                                    class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                                    id="image4">
                                <img src="img/headerimg2.jpg" alt=""
                                    class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                                    id="image5">
                            </div>
                        </div>
                    </div>
                    <div class=" transition-transform transform hover:scale-105 hover:shadow-lg">
                        <img src="img/pkl.jpg" alt="Foto Brosur PKL" class="w-full h-[700px] rounded-lg ">
                        
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-r mt-6 from-blue-400 to-indigo-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="text-white bg-gradient-to-r mt-3 from-teal-400 to-blue-500 text-center rounded-lg p-2 mb-4">
                            Layanan Magang (PKL) BBPPMPV BMTI
                        </h4>
                        <p class="md:text-base text-sm text-white leading-relaxed text-justify max-w-prose mx-auto">
                            Program Praktik Kerja Lapangan (PKL) di BBPPMPV BMTI memberikan pengalaman kerja nyata bagi para siswa dan mahasiswa. 
                            Peserta akan belajar langsung dari praktisi di bidangnya dan mendapatkan wawasan baru tentang dunia kerja.
                        </p>
                    </div>
                    

                    <div class="p-6 bg-gradient-to-r from-indigo-600 to-teal-500 rounded-3xl p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                        <h4 class="bg-gradient-to-r mt-6 from-blue-400 to-indigo-500 font-bold text-white rounded-lg p-2 mb-4 text-center">Form Biodata Peserta</h4>
                        <p class="mb-4 text-white text-center">Silakan lengkapi data berikut untuk pendaftaran:</p>
                        <form action="#" method="POST" class="space-y-6" enctype="multipart/form-data">
                            <!-- Biodata Peserta -->
                            <div>
                                <h5 class="text-lg font-semibold text-white mb-2 text-center">Biodata Peserta</h5>
                                <!-- Nama Lengkap -->
                                <div>
                                    <label for="name" class="block text-white font-medium">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan nama lengkap">
                                </div>
                                <!-- Alamat Email -->
                                <div>
                                    <label for="email" class="block text-white font-medium">Alamat Email</label>
                                    <input type="email" id="email" name="email" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan alamat email">
                                </div>
                                <!-- Tempat Lahir -->
                                <div>
                                    <label for="birthplace" class="block text-white font-medium">Tempat Lahir</label>
                                    <input type="text" id="birthplace" name="birthplace" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan tempat lahir">
                                </div>
                                <!-- Tanggal Lahir -->
                                <div>
                                    <label for="birthdate" class="block text-white font-medium">Tanggal Lahir</label>
                                    <input type="date" id="birthdate" name="birthdate" class="w-full border border-gray-300 p-2 rounded-lg">
                                </div>
                                <!-- Alamat -->
                                <div>
                                    <label for="address" class="block text-white font-medium">Alamat</label>
                                    <textarea id="address" name="address" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan alamat lengkap"></textarea>
                                </div>
                                <!-- Nomor HP -->
                                <div>
                                    <label for="phone" class="block text-white font-medium">Nomor HP</label>
                                    <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan nomor HP">
                                </div>
                            </div>
                    
                            <!-- Informasi Pendidikan -->
                            <div>
                                <h5 class="text-lg font-semibold text-white mb-2 text-center">Informasi Pendidikan</h5>
                                <!-- Jenjang Pendidikan -->
                                <div>
                                    <label for="education-level" class="block text-white font-medium">Jenjang Pendidikan</label>
                                    <select id="education-level" name="education-level" class="w-full border border-gray-300 p-2 rounded-lg">
                                        <option value="">Pilih Jenjang Pendidikan</option>
                                        <option value="sma">SMA/SMK</option>
                                        <option value="d3">Diploma (D3)</option>
                                        <option value="s1">Sarjana (S1)</option>
                                    </select>
                                </div>
                                <!-- Lembaga Pendidikan -->
                                <div>
                                    <label for="institution" class="block text-white font-medium">Lembaga Pendidikan</label>
                                    <input type="text" id="institution" name="institution" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan nama lembaga pendidikan">
                                </div>
                                <!-- Fakultas/Jurusan -->
                                <div>
                                    <label for="faculty" class="block text-white font-medium">Fakultas/Jurusan</label>
                                    <input type="text" id="faculty" name="faculty" class="w-full border border-gray-300 p-2 rounded-lg" placeholder="Masukkan fakultas/jurusan">
                                </div>
                                <!-- Upload Surat -->
                                <div>
                                    <label for="school-letter" class="block text-white font-medium">Upload Surat dari Sekolah/Kampus</label>
                                    <input type="file" id="school-letter" name="school-letter" class="w-full border border-gray-300 p-2 rounded-lg">
                                </div>
                            </div>
                    
                            <!-- Tombol Submit -->
                            <button type="submit" class="w-full bg-gradient-to-r mt-6 from-blue-400 to-indigo-500 text-white p-2 rounded-lg hover:bg-blue-800">
                                Kirim Data
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
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
