<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- meanggil component navbar.blade.php menggunakan x-navbar --}}
    <x-navbar></x-navbar>

    <x-header>Pendapatan Negara Bukan Pajak</x-header>

    <div class="min-h-full bg-white pb-10">
        <main>
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
                <div class="md:flex md:flex-row flex-col justify-center md:gap-32">
                    <div
                        class="bg-white md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 mb-8 rounded-md border-2 border-gray-300 hover:shadow-xl ">
                        <div class="flex">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                        </div>
                        <div class="h-[30%]">
                            <h1 class="text-2xl font-bold">Layanan Magang ( PKL )</h1>
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
                        class="bg-white md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 rounded-md border-2 border-gray-300 hover:shadow-xl ">
                        <div class="flex">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                        </div>
                        <div class="h-[30%]">
                            <h1 class="text-2xl font-bold">Layanan Penggunaan Fasilitas Lembaga</h1>
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

            {{-- card baris 2 --}}
            <div class="mx-auto max-w-7xl px-4 py-6 flex justify-center sm:px-6 lg:px-8">
                <div class="md:flex md:flex-row flex-col justify-center md:gap-32">
                    <div
                        class="bg-white md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 mb-8 rounded-md border-2 border-gray-300 hover:shadow-xl ">
                        <div class="flex">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                        </div>
                        <div class="h-[30%]">
                            <h1 class="text-2xl font-bold">Layanan Prioritas</h1>
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
                        class="bg-white md:w-96 w-[250px] md:h-60 h-auto px-5 py-3 rounded-md border-2 border-gray-300 hover:shadow-xl ">
                        <div class="flex">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="">
                        </div>
                        <div class="h-[30%]">
                            <h1 class="text-2xl font-bold">Layanan Kunjungan <br> ( Study Tour )</h1>
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

    <x-footer></x-footer>

</x-layout>
