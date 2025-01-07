<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Layanan Magang (PKL)</x-header>

    <section class="w-full px-40 py-20 flex gap-5">
        {{-- batas kiri --}}
        <div class="w-1/2">
            <div class="felx felx-col space-y-5">
                <div class="transition-transform transform hover:scale-105 ">
                    <div id="magang-images" class="flex justify-center">
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
                    <img src="img/image.png" alt="Foto Brosur PKL" class="w-full h-[800px] rounded-lg ">
                </div>
            </div>
        </div>
        {{-- End Batas Kiri --}}

        {{-- Batas Kanan --}}
        <div class="w-1/2">
            <div class="w-full flex flex-col space-y-5">
                <div
                    class="bg-gradient-to-r from-blue-400 to-indigo-500 rounded-xl px-6 py-3 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg">
                    <h4
                        class="text-white text-xl font-semibold bg-gradient-to-r mt-3 from-teal-400 to-blue-500 text-center rounded-lg p-2 mb-4">
                        Layanan Magang (PKL) BBPPMPV BMTI
                    </h4>
                    <p class="md:text-base pb-2 text-sm text-white leading-relaxed text-justify max-w-prose mx-auto">
                        Program Praktik Kerja Lapangan (PKL) di BBPPMPV BMTI memberikan pengalaman kerja nyata bagi
                        para siswa dan mahasiswa.
                        Peserta akan belajar langsung dari praktisi di bidangnya dan mendapatkan wawasan baru
                        tentang dunia kerja.
                    </p>
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
                <div x-show="isOpen" id="form-pendaftaran" class="w-auto">
                    <form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="space-y-4">
                            <!-- Biodata -->
                            <div
                                class="p-6 bg-gradient-to-r from-indigo-600 to-teal-500 rounded-lg shadow-inner mb-6 md:mb-0">
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
                                    <label for="address" class="block text-sm font-medium text-white">Alamat</label>
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
                            <div
                                class="p-6 bg-gradient-to-r from-teal-500 to-indigo-600 rounded-lg shadow-inner mb-6 md:mb-0">
                                <h3 class="text-2xl font-semibold mb-6 text-center text-white">Informasi
                                    Pendidikan</h3>
                                <div class="mb-4">
                                    <label for="education_level" class="block text-sm font-medium text-white">Jenjang
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
                                    <label for="upload_letter" class="block">
                                        <div class="flex justify-between">
                                            <p class="text-white text-sm font-medium">Upload Surat Dari Sekolah/Kampus
                                            </p>
                                            <p class="text-red-400 text-sm font-medium tracking-wider">*Ukuran File Max
                                                1MB</p>
                                        </div>
                                    </label>
                                    <input type="file" id="upload_letter" name="upload_letter"
                                        accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" required
                                        class="mt-1 block w-full border text-gray-200 border-gray-300 rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500 pl-5 py-2 transition-all duration-300 ease-in-out hover:bg-yellow-50">
                                    <p id="file_error"
                                        class="text-red-400 text-center font-medium text-xl mt-2 hidden tracking-wider">
                                        *Ukuran
                                        file melebihi
                                        1MB.*</p>
                                </div>

                                <script>
                                    document.getElementById('upload_letter').addEventListener('change', function(event) {
                                        const file = event.target.files[0]; // Ambil file yang dipilih
                                        const errorMessage = document.getElementById('file_error');

                                        if (file && file.size > 1024 * 1024) { // Cek apakah ukuran file > 1MB
                                            errorMessage.classList.remove('hidden'); // Tampilkan pesan error
                                            event.target.value = ''; // Reset input file

                                            // Timer untuk menyembunyikan pesan setelah 3 detik
                                            setTimeout(() => {
                                                errorMessage.classList.add('hidden');
                                            }, 5000); // 5000 ms = 5 detik
                                        } else {
                                            errorMessage.classList.add('hidden'); // Sembunyikan pesan error jika valid
                                        }
                                    });
                                </script>

                                <div class="text-center">
                                    <button type="submit"
                                        class="w-1/3 bg-gradient-to-r font-bold from-blue-500 to-teal-400  text-white py-2 rounded-xl shadow-lg hover:scale-110 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 mx-auto transition-transform duration-300">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Batas Kanan --}}
    </section>

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
    </script>
</x-layout>
