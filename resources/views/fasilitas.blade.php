<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Layanan Penggunaan Fasilitas Lembaga</x-header>

    <div class="min-h-full pb-20">
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
                <div class=" max-w-[300px] md:max-w-full flex flex-col items-center gap-2 text-center">
                    <h1 class="md:text-3xl font-bold">Selamat Datang di Layanan Penggunaan Fasilitas Lembaga <br> BBPPMPV
                        BMTI
                    </h1>
                    <h2 class="text-sm md:text-2xl tracking-wide">Okupasi Gedung</h2>
                </div>
                <div
                    class="md:pt-[40px] pt-5 max-w-[300px] md:max-w-[400px] flex flex-col items-center text-sm text-center">
                    <a href="https://www.google.com/maps/place/
                    https://www.google.com/maps/place/BBPPMPV+BMTI/@-6.8745944,107.5629009,18.5z/data=!4m15!1m8!3m7!1s0x2e68e43ca7edd2a1:0x571774d55ca7266!2sJl.+Pesantren+No.KM,+RW.2,+Cibabat,+Kec.+Cimahi+Utara,+Kota+Cimahi,+Jawa+Barat+40514!3b1!8m2!3d-6.8743354!4d107.5627199!16s%2Fg%2F11c3q2qg68!3m5!1s0x2e68e43ca7edd2a1:0x4208cba0173db01f!8m2!3d-6.8744511!4d107.5628858!16s%2Fg%2F1ty83wnl?entry=ttu&g_ep=EgoyMDI0MTExMC4wIKXMDSoASAFQAw%3D%3D"
                        target="_blank">
                        <p class="text-xs md:text-[15px] font-light text-blue-500 hover:underline">Jl. Pesantren No .KM,
                            RW.2, Cibabat, Kec.
                            Cimahi Utara,
                            Kota
                            Cimahi, Jawa
                            Barat
                            40514</p>
                    </a>
                </div>
                <div class="md:pt-[30px] pt-5">
                    <a href="https://bbppmpvbmti.kemdikbud.go.id/main/" target="_blank"
                        class="bg-blue-500 hover:bg-blue-700 text-white text-sm md:text-base font-bold py-2 px-4 rounded-lg block text-center">
                        Tentang Kami
                    </a>
                </div>

                {{-- Alur sewa --}}
                <h1
                    class="md:text-3xl text-xl font-bold flex justify-center item-center md:pt-[70px] pt-10 tracking-wide text-center">
                    Alur
                    Sewa
                </h1>
                <div class="md:pt-[70px] pt-5 flex flex-col md:flex-row gap-5">
                    {{-- Alur 1 --}}
                    <div class="bg-white md:h-56 p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="pl-2 md:pt-2 flex md:flex-col md:items-start  items-center">
                            <svg class="w-10 h-10 mr-3 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 20V10h4v10m4 0V6h4v14M3 22h18" />
                            </svg>

                            <h1
                                class="rounded w-full flex md:pl-10 pl-4 items-center md:text-2xl text-base bg-blue-500 py-2 mt-2 text-white font-bold">
                                1
                                <span class="md:text-lg text-sm pl-8 font-normal">Pilih Gedung</span>
                            </h1>
                        </div>
                        <h2 class="flex justify-center py-3 px-2 text-justify h-[80px] md:text-sm text-xs">Pilihl gedung
                            untuk
                            melihat detail gedung yang
>>>>>>> efa2eba8071f8e105c7017953fb5ae6553e72d1a
                            sesuai
                            dengan kebutuhan Anda.</h2>
                    </div>
                    {{-- Alur 2 --}}
                    <div class="bg-white md:h-56 p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="pl-2 md:pt-2 flex md:flex-col md:items-start items-center">
                            <svg class="w-10 h-10 mr-3 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <rect x="3" y="5" width="18" height="16" rx="2" ry="2"
                                    stroke="currentColor" stroke-width="2" fill="none" />
                                <path d="M16 3v4M8 3v4M3 10h18" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <h1
                                class="rounded w-full flex md:pl-10 pl-4 items-center md:text-2xl text-lg bg-blue-500 py-2 mt-2 text-white font-bold">
                                2
                                <span class="md:text-lg text-sm pl-8 font-normal">Cek Ketersediaan Gedung</span>
                            </h1>
                        </div>
                        <h2 class="flex justify-center py-3 px-2 text-justify h-[80px] md:text-sm text-xs">Lihat
                            Ketersiadaan
                            gedung di calender,
                            tentukan tanggal berapa anda ingin menggunakan gedung tersebut, pastikan bahwa tanggal yang
                            anda targetkan tersedia.</h2>
                    </div>
                    {{-- Alur 3 --}}
                    <div
                        class="bg-white md:h-56 p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="pl-2 md:pt-2 flex md:flex-col md:items-start items-center">
                            <svg class="w-10 h-10 mr-3 rtl:rotate-[270deg]" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.647c-.297-.148-1.759-.867-2.031-.964-.273-.099-.472-.148-.67.15-.197.297-.767.964-.94 1.161-.173.198-.347.223-.644.074-.297-.148-1.255-.463-2.39-1.475-.883-.788-1.48-1.762-1.655-2.06-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.521.149-.173.198-.297.298-.495.1-.198.05-.372-.025-.521-.075-.148-.67-1.611-.917-2.229-.242-.583-.488-.503-.67-.513h-.574c-.198 0-.521.074-.794.372-.273.297-1.044 1.02-1.044 2.495 0 1.476 1.068 2.903 1.217 3.1.148.198 2.1 3.202 5.077 4.488.709.306 1.262.489 1.693.625.712.227 1.36.195 1.872.118.571-.085 1.759-.719 2.007-1.413.248-.694.248-1.29.173-1.414-.074-.123-.27-.198-.567-.347ZM12.003 2c-5.523 0-10 4.477-10 10 0 1.77.46 3.46 1.334 4.958L2 22l5.192-1.308A9.943 9.943 0 0 0 12.003 22c5.523 0 10-4.477 10-10s-4.477-10-10-10Zm0 18.2a8.199 8.199 0 0 1-4.162-1.137l-.297-.177-3.083.777.827-3.004-.194-.308A8.195 8.195 0 1 1 12.003 20.2Z" />
                            </svg>

                            <h1
                                class="rounded w-full flex md:pl-10 pl-4 items-center md:text-2xl text-lg bg-blue-500 py-2 mt-2 text-white font-bold">
                                3
                                <span class="md:text-lg text-sm pl-8 font-normal">Hubungi Whatsapp</span>
                            </h1>
                        </div>
                        <h2 id="build"
                            class="flex justify-center py-3 px-2 text-justify h-[80px] md:text-sm text-xs">Setelah
                            menentukan
                            tanggal berapa anda ingin gunakan gedung tersebut,
>>>>>>> efa2eba8071f8e105c7017953fb5ae6553e72d1a
                            lanjutkan dengan menghubungi kami melalui chat WhatsApp untuk pemesanan dan informasi lebih
                            lanjut.
                        </h2>
                    </div>
                </div>

                {{-- Card Gedung --}}
                <div class="py-10 md:w-auto w-full">
                    <div class="flex justify-center items-center pb-5">
                        <h1 class="md:text-3xl text-lg font-bold tracking-wide">
                            Daftar Sewa Gedung
                        </h1>
                    </div>
                    <div class="md:text-xl md:px-48 md:pt-5 pt-2 flex md:gap-3 gap-2">
                        <button id="btn-public" class="bg-blue-500 text-white px-5 py-1 rounded-full">Public</button>
                        <button id="btn-non-public" class="bg-gray-300 text-black px-5 py-1 rounded-full">Non
                            Public</button>
                    </div>

                    {{-- Baris 1 untuk public --}}
                    <div id="public-row" class="flex flex-col md:px-32 items-center">
                        <div class="relative md:px-10 max-w-3xl md:max-w-7xl">
                            <!-- Tombol untuk menggeser ke kiri -->
                            <button id="scroll-left"
                                class="hidden md:block absolute left-0 top-1/2 transform -translate-y-1/2 md:bg-gray-800 text-white md:px-2 py-3 rounded-full md:z-10">
                                &#8249;
                            </button>

                            <!-- Container yang bisa di-scroll dengan scrollbar tersembunyi -->
                            <div id="building-container" class="md:py-5 py-2 overflow-x-auto min-w-full hide-scrollbar">
                                <div class="flex gap-2">
                                    @foreach ($buildings as $building)
                                        <!-- Card 1 -->
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-lg bg-white flex-shrink-0">
                                            <img class="w-full md:h-40 h-32 object-cover"
                                                src="{{ asset($building->image) }}" alt="Nama Gedung">
                                            <div class="px-4 py-3">
                                                <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-green-700 text-sm">Rp
                                                        {{ number_format($building->price) }}
                                                        / hari</span>
                                                </div>
                                                <div class="pt-1 md:h-9 hidden md:block">
                                                    <p class="font-light">
                                                        {{ Str::limit($building->description, 60) }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3">
                                                <a href="{{ route('buildings.show', $building->id) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-3 rounded w-full text-center block tracking-widest">
                                                    Lihat Detail &raquo;
                                                </a>
                                            </div>
                                        </div>
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
                        <div class="relative md:px-10 max-w-3xl md:max-w-7xl">
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
                                        <!-- Card 2 -->
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-lg bg-white flex-shrink-0">
                                            <img class="w-full md:h-40 h-32 object-cover"
                                                src="{{ asset($building->image) }}" alt="Nama Gedung">
                                            <div class="px-4 py-3">
                                                <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                                <div class="pt-1 md:h-9 hidden md:block">
                                                    <p class="font-light">
                                                        {{ Str::limit($building->description, 60) }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3">
                                                <a href="{{ route('buildings.show', $building->id) }}"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1.5 px-3 rounded w-full text-center block tracking-widest">
                                                    Lihat Detail &raquo;
                                                </a>
                                            </div>
                                        </div>
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

                {{-- Icon Whatsapp Admin --}}
                <x-whatsapp-admin></x-whatsapp-admin>
            </div>
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
