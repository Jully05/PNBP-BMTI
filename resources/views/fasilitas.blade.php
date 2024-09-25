<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>Layanan Penggunaan Fasilitas Lembaga</title>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) { // Ketika scroll lebih dari 50px
                navbar.classList.add('backdrop-blur-lg',
                    'bg-white/30'); // Menambahkan efek blur dan background semi transparan
            } else {
                navbar.classList.remove('backdrop-blur-lg',
                    'bg-white/30'); // Menghilangkan efek blur saat kembali ke atas
            }
        });
        
        // Fungsi untuk mendeteksi scroll
        window.addEventListener('scroll', function() {
            const whatsappBtn = document.getElementById('whatsappBtn');
            if (window.scrollY > 500) { // Menampilkan tombol setelah scroll 500px
                whatsappBtn.classList.add('show');
            } else {
                whatsappBtn.classList.remove('show');
            }
        });
    </script>
</head>

<body class="h-full">
    <nav id="navbar" class="bg-transparent fixed top-0 left-0 w-full transition duration-300 ease-in-out">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10" src="img/logo-bmti.png" alt="Your Company">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="bg-blue-500 shadow min-h-full flex justify-center items-center">
        <div
            class=" flex flex-col justify-center items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 min-h-[200px]">
            <img class="w-[120px] h-[120px]" src="img/logo-bmti.png" alt="Logo">
            <h1 class="text-2xl md:text-5xl font-inter font-bold text-neutral-50 mt-[60px] tracking-wider text-center">
                Layanan Penggunaan Fasilitas Lembaga</h1>
        </div>
    </header>

    <div class="min-h-full bg-white">
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col justify-center items-center">
                <div class="mt-[150px] max-w-[300px] md:max-w-full flex flex-col items-center gap-2 text-center">
                    <h1 class="text-2xl font-bold">Selamat Datang di BBPPMPV BMTI</h1>
                    <h2 class="text-sm md:text-xl tracking-wide">Gedung Serbaguna</h2>
                </div>
                <div class="mt-[50px] max-w-[200px] md:max-w-[400px] flex flex-col items-center text-sm text-center">
                    <p class="text-xs md:text-[15px]">Jl. Pesantren No .KM, RW.2, Cibabat, Kec. Cimahi Utara, Kota
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
                <h1 class="text-3xl font-bold flex justify-center item-center mt-[130px] tracking-wide text-center">Alur
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
                <h1 class="text-3xl font-bold flex justify-center item-center mt-[130px] tracking-wide text-center">Daftar Gedung Serba Guna
                </h1>
                <x-card></x-card>

                {{-- Icon Whatsapp Admin --}}
                <x-whatsapp-admin></x-whatsapp-admin>
            </div>
        </main>
    </div>
</body>

</html>
