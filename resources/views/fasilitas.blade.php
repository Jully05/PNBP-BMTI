<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-navbar></x-navbar>

    <x-header>Layanan Penggunaan Fasilitas Lembaga</x-header>

    <div class="min-h-full bg-white pb-20">
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
                <div class="mt-[150px] max-w-[300px] md:max-w-full flex flex-col items-center gap-2 text-center">
                    <h1 class="text-2xl font-bold">Selamat Datang di BBPPMPV BMTI</h1>
                    <h2 class="text-sm md:text-xl tracking-wide">Penyedia Sewa Gedung</h2>
                </div>
                <div class="mt-[50px] max-w-[200px] md:max-w-[400px] flex flex-col items-center text-sm text-center">
                    <p class="text-xs md:text-[15px] font-light">Jl. Pesantren No .KM, RW.2, Cibabat, Kec. Cimahi Utara,
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
                    class="md:text-3xl text-xl font-bold flex justify-center item-center mt-[130px] tracking-wide text-center">
                    Alur
                    Sewa
                </h1>
                <div class="mt-[70px] flex flex-col md:flex-row gap-14">
                    {{-- card 1 --}}
                    <div
                        class="bg-white p-[5px] border border-white shadow-2xl rounded-xl w-full max-w-[300px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/gedung.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            1
                            <span class="text-lg pl-8 font-normal">Pilih Gedung</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[100px] text-sm">Pilihlah gedung yang
                            sesuai
                            dengan kebutuhan dan anggaran Anda.</h2>
                    </div>
                    {{-- card 2 --}}
                    <div
                        class="bg-white p-[5px] border border-white shadow-2xl rounded-xl w-full max-w-[300px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/calender.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            2
                            <span class="text-lg pl-8 font-normal">Cek Stok Gedung</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[100px] text-sm">Lakukan cek gedung
                            dan
                            tanggal untuk memastikan kondisi dan fasilitas gedung sesuai dengan yang dijanjikan.</h2>
                    </div>
                    {{-- card 3 --}}
                    <div
                        class="bg-white p-[5px] border border-white shadow-2xl rounded-xl w-full max-w-[300px] mx-auto md:mx-0">
                        <div class="ml-6 mt-3"><img src="img/whatsapp.png" alt="" class="w-10 h-10"></div>
                        <h1
                            class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                            3
                            <span class="text-lg pl-8 font-normal">Chat Whatsapp</span>
                        </h1>
                        <h2 class="flex justify-center mt-3 px-2 text-justify h-[100px] text-sm">Setelah melihat stok
                            gedung,
                            lanjutkan dengan menghubungi kami melalui chat WhatsApp untuk pemesanan dan informasi lebih
                            lanjut.
                        </h2>
                    </div>
                </div>

                {{-- Card --}}
                <h1
                    class="md:text-3xl text-xl font-bold flex justify-center item-center mt-[130px] tracking-wide text-center">
                    Daftar Sewa Gedung
                </h1>
                <x-card></x-card>

                {{-- Icon Whatsapp Admin --}}
                <x-whatsapp-admin></x-whatsapp-admin>
            </div>
        </main>
    </div>

    <x-footer></x-footer>
</x-layout>
