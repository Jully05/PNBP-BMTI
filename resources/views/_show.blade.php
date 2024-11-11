<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-header>Okupasi Gedung</x-header>

    <div class="min-h-full pb-10">
        <main>
            <div class="px-20">
                <h1 class="md:text-3xl text-xl font-bold flex item-center px-10 pt-5 tracking-wide text-center">
                    Daftar Sewa Gedung
                </h1>

                <div class="relative px-10 py-4 max-w-sm md:max-w-7xl">
                    <!-- Tombol untuk menggeser ke kiri -->
                    <button id="scroll-left"
                        class="hidden md:block absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-3 rounded-full z-10">
                        &#8249;
                    </button>

                    <!-- Container yang bisa di-scroll dengan scrollbar tersembunyi -->
                    <div id="building-container" class="flex gap-2 overflow-x-auto min-w-full hide-scrollbar">
                        @foreach ($buildings as $building)
                            <a href="{{ route('buildings.show', $building->id) }}">
                                <div
                                    class="max-w-xs md:max-w-xs w-52 md:w-64 rounded-md md:h-auto shadow-lg bg-white flex-shrink-0">
                                    <img class="w-full h-40 object-cover" src="{{ asset($building->image) }}"
                                        alt="Nama Gedung">
                                    <div class="px-4 py-1">
                                        <div class="font-bold text-lg mb-1">{{ $building->name }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <!-- Tombol untuk menggeser ke kanan -->
                    <button id="scroll-right"
                        class="hidden md:block absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-2 py-3 rounded-full z-10">
                        &#8250;
                    </button>
                </div>
            </div>

            <!-- Konten lainnya -->
            <div class="px-10 py-20 flex flex-col justify-center gap-10">
                <div class="flex flex-col justify-center text-center md:text-3xl text-xl font-bold">
                    <h1>Selamat Datang Di Pendapatan Negara Bukan Pajak ( PNBP )</h1>
                    <h1>BBPPMPV BMTI</h1>
                </div>
                <div class="flex justify-center">
                    <p class="text-center md:w-[700px] w-[300px]">Selamat datang di portal resmi Pendapatan Negara Bukan
                        Pajak (
                        PNBP )
                        BBPPMV BMTI! <br> Di sini, kami
                        berkomitmen untuk memberikan informasi lengkap dan transparan tentang berbagai layanan kami yang
                        mendukung kemajuan bangsa. Melalui platform ini, Anda bisa mengakses berbagai layanan unggulan
                        yang ditawarkan oleh lembaga kami.</p>
                </div>
            </div>

            <div class="flex justify-center pb-10">
                <h1 class="font-bold md:text-3xl text-xl">Pelayanan</h1>
            </div>

            {{-- card baris 1 --}}
            <div class="mx-auto max-w-7xl px-4 py-6 flex justify-center sm:px-6 lg:px-8">
                <div class="md:flex md:flex-row flex-col justify-center md:gap-10">
                    <div
                        class="bg-sky-400 md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 mb-8 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                        <div class="flex gap-5 pb-5 items-center">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                            <div class="h-[30%]">
                                <h1 class="text-2xl font-bold">Layanan Penggunaan Fasilitas Lembaga</h1>
                            </div>
                        </div>
                        <div class="min-h-[40%]">
                            <p>informasi</p>
                        </div>
                        <div>
                            <a href="#" data-modal-target="select-modal" data-modal-toggle="select-modal"
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
                        class="bg-sky-400 md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 mb-8 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                        <div class="flex gap-5 pb-5 items-center">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                            <div class="h-[30%]">
                                <h1 class="text-2xl font-bold">Layanan Magang ( PKL )</h1>
                            </div>
                        </div>
                        <div class="min-h-[40%]">
                            <p>informasi</p>
                        </div>
                        <div>
                            <a href="#" data-modal-target="select-modal" data-modal-toggle="select-modal"
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
                        class="bg-sky-400 md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 mb-8 rounded-md border-2 border-blue-500 hover:shadow-xl ">
                        <div class="flex gap-5 items-center pb-5">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                            <div class="h-[30%]">
                                <h1 class="text-2xl font-bold">Layanan Kunjungan <br> ( Study Tour )</h1>
                            </div>
                        </div>
                        <div class="min-h-[40%]">
                            <p>informasi</p>
                        </div>
                        <div>
                            <a href="#" data-modal-target="select-modal" data-modal-toggle="select-modal"
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
        // Mendapatkan elemen container dan tombol geser
        const container = document.getElementById('building-container');
        const scrollLeftBtn = document.getElementById('scroll-left');
        const scrollRightBtn = document.getElementById('scroll-right');

        // Fungsi untuk menggeser ke kanan atau kiri
        function scrollContainer(direction) {
            container.scrollBy({
                left: direction * 300, // Menggeser 300px setiap kali tombol ditekan
                behavior: 'smooth'
            });
        }

        // Event listener untuk tombol geser
        scrollLeftBtn.addEventListener('click', () => scrollContainer(-1));
        scrollRightBtn.addEventListener('click', () => scrollContainer(1));

        // Periksa jika ada konten overflow untuk menampilkan tombol
        function checkScrollButtons() {
            const maxScrollLeft = container.scrollWidth - container.clientWidth;
            scrollLeftBtn.style.display = container.scrollLeft > 0 ? 'block' : 'none';
            scrollRightBtn.style.display = container.scrollLeft < maxScrollLeft ? 'block' : 'none';
        }

        // Event untuk menampilkan/menghilangkan tombol ketika scrolling
        container.addEventListener('scroll', checkScrollButtons);

        // Periksa saat halaman dimuat
        window.addEventListener('load', checkScrollButtons);
    </script>
</x-layout>
