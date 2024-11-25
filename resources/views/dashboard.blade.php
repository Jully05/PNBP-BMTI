<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>{{ $title }}</x-header>

    <div class="min-h-full pb-10">
        <main>

            {{-- Magang --}}
            <div>
                <div class="flex md:flex-row flex-col md:justify-between md:items-center md:px-40 px-5 pt-5">
                    <h1 class="md:text-3xl text-lg font-bold tracking-wide md:pb-0 pb-2">
                        Kegiatan Magang di BMTI
                    </h1>
                    <a href="/register"
                        class="text-blue-500 flex justify-end md:text-xl text-sm font-bold hover:underline">Lihat
                        Selengkapnya
                        &#8250;</a>
                </div>

                <div id="magang-images" class="flex justify-center md:py-6 py-2">
                    <div class="md:w-4/5 w-[90%] md:h-80 h-40 relative">
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
                            id="image3">
                        <img src="img/headerimg2.jpg" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                            id="image3">
                    </div>
                </div>
            </div>

            {{-- fasilitas --}}
            <div class="md:py-10 pt-10">
                <div class="flex justify-between items-center md:px-40 px-5">
                    <h1 class="md:text-3xl text-lg font-bold tracking-wide">
                        Daftar Sewa Gedung
                    </h1>
                </div>
                <div class="md:text-xl md:px-40 px-5 md:pt-5 pt-2 flex md:gap-3 gap-2">
                    <button id="btn-public" class="bg-blue-500 text-white px-5 py-1 rounded-full">Public</button>
                    <button id="btn-non-public" class="bg-gray-300 text-black px-5 py-1 rounded-full">Non
                        Public</button>
                </div>

                {{-- Baris 1 untuk public --}}
                <div id="public-row" class="flex flex-col md:px-32 items-center">
                    <div class="relative md:px-10 px-5 max-w-3xl md:max-w-7xl">
                        <!-- Tombol untuk menggeser ke kiri -->
                        <button id="scroll-left"
                            class="hidden md:block absolute left-0 top-1/2 transform -translate-y-1/2 md:bg-gray-800 text-white md:px-2 py-3 rounded-full md:z-10">
                            &#8249;
                        </button>

                        <!-- Container yang bisa di-scroll dengan scrollbar tersembunyi -->
                        <div id="building-container" class="md:py-5 py-2 overflow-x-auto min-w-full hide-scrollbar">
                            <div class="flex gap-2">
                                @foreach ($buildings as $building)
                                    <a href="{{ route('buildings.show', $building->id) }}">
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto md:shadow-lg bg-white flex-shrink-0">
                                            <img class="md:w-full md:h-40 h-36 object-cover md:rounded-none rounded-md"
                                                src="{{ asset($building->image) }}" alt="Nama Gedung">
                                            <div class="md:px-2 px-1 py-1">
                                                <div class="font-bold md:text-lg mb-1">{{ $building->name }}</div>
                                            </div>
                                            <div class="flex justify-between items-center pb-5">
                                                <span class="text-gray-700 px-1 md:px-2 text-sm">Rp
                                                    {{ number_format($building->price) }}
                                                    / hari</span>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tombol untuk menggeser ke kanan -->
                        <button id="scroll-right"
                            class="hidden md:block absolute right-0 top-1/2 transform -translate-y-1/2 md:bg-gray-800 text-white md:px-2 py-3 rounded-full md:z-10">
                            &#8250;
                        </button>
                    </div>
                </div>

                {{-- Baris 2 untuk non public --}}
                <div id="non-public-row" class="hidden md:px-32 items-center">
                    <div class="relative md:px-10 px-5 max-w-3xl md:max-w-7xl">
                        <!-- Tombol untuk menggeser ke kiri -->
                        <button id="scroll-left-non-public"
                            class="md:block absolute left-0 top-1/2 transform -translate-y-1/2 md:bg-gray-800 text-white px-2 py-3 rounded-full z-10">
                            &#8249;
                        </button>

                        <!-- Container yang bisa di-scroll dengan scrollbar tersembunyi -->
                        <div id="building-container-non-public"
                            class="md:py-5 py-2 overflow-x-auto min-w-full hide-scrollbar">
                            <div class="flex gap-2">
                                @foreach ($buildings as $building)
                                    <a href="{{ route('buildings.show', $building->id) }}">
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto md:shadow-lg bg-white flex-shrink-0">
                                            <img class="md:w-full md:h-40 h-36 object-cover md:rounded-none rounded-md"
                                                src="{{ asset($building->image) }}" alt="Nama Gedung">
                                            <div class="md:px-4 px-1 py-1">
                                                <div class="font-bold md:text-lg mb-1">{{ $building->name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Tombol untuk menggeser ke kanan -->
                        <button id="scroll-right-non-public"
                            class="md:block absolute right-0 top-1/2 transform -translate-y-1/2 md:bg-gray-800 text-white px-2 py-3 rounded-full z-10">
                            &#8250;
                        </button>
                    </div>
                </div>
            </div>

            {{-- Kunjungan Industri --}}
            <div>
                <div class="flex md:flex-row flex-col justify-between md:px-40 px-5 pt-5">
                    <h1 class="md:text-3xl text-lg font-bold tracking-wide md:pb-0 pb-2">
                        Kunjungan Industri di BMTI
                    </h1>
                    <a href="/kunjin"
                        class="text-blue-500 flex justify-end md:text-xl text-sm font-bold hover:underline">Lihat
                        Selengkapnya
                        &#8250;</a>
                </div>

                <div id="kunjungan-images" class="flex justify-center md:py-6 py-2">
                    <div class="md:w-4/5 w-[90%] md:h-80 h-40 relative">
                        <img src="img/headerimg5.png" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-100"
                            id="image1">
                        <img src="img/headerimg3.jpeg" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                            id="image2">
                        <img src="img/headerimg6.jpg" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                            id="image3">
                        <img src="img/headerimg4.png" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                            id="image3">
                        <img src="img/headerimg2.jpg" alt=""
                            class="w-full h-full rounded-md object-cover absolute transition-opacity duration-1000 opacity-0"
                            id="image3">
                    </div>
                </div>
            </div>

            <!-- Konten lainnya -->
            <div>
                <div class="flex justify-center pt-10">
                    <h1 class="font-bold md:text-3xl text-xl">Pelayanan</h1>
                </div>

                <div class="mx-auto max-w-7xl px-4 py-6 flex justify-center sm:px-6 lg:px-8">
                    <div class="flex md:flex-row flex-col justify-center md:gap-5 gap-3">
                        <div
                            class="bg-white md:w-96 w-[300px] h-auto px-5 pb-3 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                            <div class="flex items-center md:h-20 h-16 gap-3">
                                <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                                <div class="">
                                    <h1 class="md:text-xl text-sm font-bold">Layanan Penggunaan Fasilitas Lembaga</h1>
                                </div>
                            </div>
                            <div class="md:h-[70px] h-[50px]">
                                <p class="md:text-base text-justify text-xs">
                                    @php
                                        $text1 = 'Layanan Penggunaan Fasilitas Lembaga kami memberikan kesempatan kepada pihak
                                eksternal maupun internal untuk memanfaatkan berbagai fasilitas gedung, seperti
                                gedung serba guna, ruang seminar, dan ruang rapat kerja.';
                                    @endphp
                                    {{ Str::limit($text1, 150) }}</p>
                            </div>
                            <div class="md:text-base text-sm py-2">
                                <a href="/fasilitas" data-modal-target="select-modal"
                                    data-modal-toggle="select-modal"
                                    class="inline-flex font-medium items-center text-blue-600 hover:underline">
                                    Open
                                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div
                            class="bg-white md:w-96 w-[300px] h-auto px-5 pb-3 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                            <div class="flex items-center md:h-20 h-16 gap-3">
                                <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                                <div class="">
                                    <h1 class="md:text-xl text-sm font-bold">Layanan Magang (PKL)</h1>
                                </div>
                            </div>
                            <div class="md:h-[70px] h-[50px]">
                                <p class="md:text-base text-xs text-justify">
                                    @php
                                        $text2 =
                                            'kami menawarkan kesempatan bagi siswa maupun mahasiswa untuk mendapatkan pengalaman langsung di dunia industri. Kami menyediakan fasilitas dan bimbingan yang diperlukan untuk mendukung perkembangan keterampilan dan pengetahuan peserta PKL. Program ini bertujuan untuk mempersiapkan mahasiswa dalam menghadapi tantangan dunia kerja dan meningkatkan kualitas pendidikan melalui pengalaman praktis.';
                                    @endphp
                                    {{ Str::limit($text2, 110) }}
                                </p>
                            </div>
                            <div class="md:text-base text-sm py-2">
                                <a href="/register" data-modal-target="select-modal" data-modal-toggle="select-modal"
                                    class="inline-flex font-medium items-center text-blue-600 hover:underline">
                                    Open
                                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div
                            class="bg-white md:w-96 w-[300px] h-auto px-5 pb-3 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                            <div class="flex items-center md:h-20 h-16 gap-3">
                                <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                                <div class="">
                                    <h1 class="md:text-xl text-sm font-bold">Layanan Kunjungan Industri</h1>
                                </div>
                            </div>
                            <div class="md:text-base text-xs md:h-[70px] h-[50px]">
                                <p class="md:text-base text-xs text-justify">
                                    @php
                                        $text3 =
                                            'kami memberikan kesempatan bagi siswa maupun mahasiswa untuk belajar langsung dari lembaga BBPPMPV BMTI. Kunjungan ini dirancang untuk memperluas wawasan peserta tentang praktik industri dan teknologi terbaru. Melalui pengalaman ini,siswa dan mahasiswa dapat menghubungkan teori yang dipelajari di sekolah atau kampus dengan dunia kerja yang sesungguhnya, serta memperluas jaringan profesional mereka.';
                                    @endphp
                                    {{ Str::limit($text3, 120) }}
                                </p>
                            </div>
                            <div class="md:text-base text-sm py-2">
                                <a href="/kunjin" data-modal-target="select-modal" data-modal-toggle="select-modal"
                                    class="inline-flex font-medium items-center text-blue-600 hover:underline">
                                    Open
                                    <svg class="w-3 h-3 ms-2.5 rtl:rotate-[270deg]" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-whatsapp-admin></x-whatsapp-admin>
        </main>
    </div>

    <style>
        /* Sembunyikan scrollbar di desktop */
        .hide-scrollbar {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, and Opera */
        }
    </style>

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
