<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Layanan Penggunaan Fasilitas Lembaga</x-header>

    <div class="min-h-full pb-20">
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
                <div class=" max-w-[300px] md:max-w-full flex flex-col items-center gap-2 text-center">
                    <h1 class="text-3xl font-bold">Selamat Datang di Layanan Penggunaan Fasilitas Lembaga <br> BBPPMPV
                        BMTI
                    </h1>
                    <h2 class="text-sm md:text-2xl tracking-wide">Okupasi Gedung</h2>
                </div>
                <div class="mt-[40px] max-w-[200px] md:max-w-[400px] flex flex-col items-center text-sm text-center">
                    <p class="text-xs md:text-[15px] font-light">Jl. Pesantren No .KM, RW.2, Cibabat, Kec.
                        Cimahi Utara,
                        Kota
                        Cimahi, Jawa
                        Barat
                        40514</p>
                </div>
                <div class="mt-[30px]">
                    <a href="#tentang-kami"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg block text-center">
                        Tentang Kami
                    </a>
                </div>

                {{-- Alur sewa --}}
                <h1
                    class="md:text-3xl text-xl font-bold flex justify-center item-center mt-[70px] tracking-wide text-center">
                    Alur
                    Sewa
                </h1>
                <div class="mt-[70px] flex flex-col md:flex-row gap-5">
                    {{-- Alur 1 --}}
                    <div
                        class="bg-white p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/build.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            1
                            <span class="text-lg pl-8 font-normal">Pilih Gedung</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[80px] text-sm">Pilihlah gedung yang
                            sesuai
                            dengan kebutuhan dan anggaran Anda.</h2>
                    </div>
                    {{-- Alur 2 --}}
                    <div
                        class="bg-white p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/kalender.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            2
                            <span class="text-lg pl-8 font-normal">Cek Stok Gedung</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[80px] text-sm">Lakukan cek gedung
                            dan
                            tanggal untuk memastikan kondisi dan fasilitas gedung sesuai dengan yang dijanjikan.</h2>
                    </div>
                    {{-- Alur 3 --}}
                    <div
                        class="bg-white p-[5px] border-2 hover:shadow-xl border-gray rounded-xl w-full max-w-[350px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/wa.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            3
                            <span class="text-lg pl-8 font-normal">Chat Whatsapp</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[80px] text-sm">Setelah melihat stok
                            gedung,
                            lanjutkan dengan menghubungi kami melalui chat WhatsApp untuk pemesanan dan informasi lebih
                            lanjut.
                        </h2>
                    </div>
                </div>

                {{-- Card Gedung --}}
                <h1
                    class="md:text-3xl text-xl font-bold flex justify-center item-center mt-20 md:mt-[130px] tracking-wide text-center">
                    Daftar Sewa Gedung
                </h1>


                <div class="py-10">
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
                                        <!-- Card 1 -->
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-lg bg-white flex-shrink-0">
                                            <img class="w-full h-40 object-cover" src="{{ asset($building->image) }}"
                                                alt="Nama Gedung">
                                            <div class="px-4 py-3">
                                                <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-green-700 text-sm">Rp
                                                        {{ number_format($building->price) }}
                                                        / hari</span>
                                                </div>
                                                <div class="pt-1 md:h-9 hidden md:block">
                                                    <p class="font-light">{{ Str::limit($building->description, 60) }}
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
                                        <!-- Card 1 -->
                                        <div
                                            class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-lg bg-white flex-shrink-0">
                                            <img class="w-full h-40 object-cover" src="{{ asset($building->image) }}"
                                                alt="Nama Gedung">
                                            <div class="px-4 py-3">
                                                <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                                <div class="pt-1 md:h-9 hidden md:block">
                                                    <p class="font-light">{{ Str::limit($building->description, 60) }}
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


                {{-- <div class="mt-[50px] px-2 py-4 max-w-sm md:max-w-6xl flex overflow-x-auto hide-scrollbar">
                    <div class="flex gap-7 min-w-max">
                        @foreach ($buildings as $building)
                            <!-- Card 1 -->
                            <div
                                class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-xl bg-white flex-shrink-0">
                                <img class="w-full h-40 object-cover" src="{{ asset($building->image) }}"
                                    alt="Nama Gedung">
                                <div class="px-4 py-3">
                                    <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-700 text-sm">Rp {{ number_format($building->price) }}
                                            / hari</span>
                                    </div>
                                    <div class="pt-1 md:h-2 hidden md:block">
                                        <p class="font-light">{{ Str::limit($building->description, 30) }}</p>
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
                </div> --}}

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
