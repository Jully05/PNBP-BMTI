<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
        <div class="mt-[150px] flex flex-col items-center gap-2">
            <h1 class="text-2xl font-bold">Selamat Datang di BBPPMPV BMTI</h1>
            <h2 class="text-xl tracking-wide">Gedung Serbaguna</h2>
        </div>
        <div class="mt-[50px] flex flex-col items-center text-sm">
            <p>Jl. Pesantren No.KM, RW.2, Cibabat, Kec. Cimahi Utara,</p>
            <p>Kota Cimahi, Jawa Barat 40514</p>
        </div>
        <div class="mt-[30px]">
            <a href="#tentang-kami"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg block text-center">
                Tentang Kami
            </a>
        </div>

        {{-- Alur sewa --}}
        <h1 class="text-2xl font-bold flex justify-center item-center mt-[130px] tracking-wide">Alur Sewa</h1>
        <div class="mt-[70px] flex gap-14">
            {{-- card 1 --}}
            <div class="bg-gray-200 p-[5px] border border-gray-300 shadow-2xl rounded-md max-w-[230px]">
                <div class="ml-6 mt-3"><img src="img/gedung.png" alt="" class="w-10 h-10"></div>
                <h1
                    class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                    1
                    <span class="text-lg pl-8 font-normal">Pilih Gedung</span>
                </h1>
                <h2 class="flex justify-center items-center text-justify h-[100px]">Pilihlah gedung yang sesuai dengan
                    kebutuhan dan anggaran Anda.</h2>
            </div>
            {{-- card 2 --}}
            <div class="bg-gray-200 p-[5px] border border-gray-300 shadow-2xl rounded-md max-w-[230px]">
                <div class="ml-6 mt-3"><img src="img/calender.png" alt="" class="w-10 h-10"></div>
                <h1
                    class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                    2
                    <span class="text-lg pl-8 font-normal">Cek Stok Gedung</span>
                </h1>
                <h2 class="flex justify-center items-center text-justify h-[100px]">Pilihlah gedung yang sesuai dengan
                    kebutuhan dan anggaran Anda.</h2>
            </div>
            {{-- card 3 --}}
            <div class="bg-gray-200 p-[5px] border border-gray-300 shadow-2xl rounded-md max-w-[230px]">
                <div class="ml-6 mt-3"><img src="img/whatsapp.png" alt="" class="w-10 h-10"></div>
                <h1
                    class="rounded flex justify-center items-center text-2xl bg-blue-500 py-2 mt-2 text-white font-bold">
                    3
                    <span class="text-lg pl-8 font-normal">Chat Whatsapp</span>
                </h1>
                <h2 class="flex justify-center items-center text-justify h-[100px]">Pilihlah gedung yang sesuai dengan
                    kebutuhan dan anggaran Anda.</h2>
            </div>
        </div>

        {{-- Card --}}
        <x-build></x-build>
    </div>
</x-layout>
