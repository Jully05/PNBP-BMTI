<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Layanan Magang</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar-magang></x-navbar-magang>

        <header class="bg-white shadow mt-[60px]">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 md:flex gap-3 items-end md:items-center">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight text-gray-900">Layanan Magang (PKL) </h1>
                <span class="text-red-500 text-sm md:text-xl">Registrasi Online</span>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex md:flex-row flex-col-reverse justify-center md:justify-evenly items-center ">
                <div class="">
                    <img src="https://bbppmpvbmti.kemdikbud.go.id/main/wp-content/uploads/2024/07/Pelatihan-Praktek-Kerja-Lapangan-819x1024.jpg"
                        alt="" class="object-cover max-w-[300px] md:max-w-xl">
                </div>
                <div class="md:h-[720px]">
                    <h1 class="bg-blue-500 text-white tracking-wider rounded-md px-3 py-1 font-bold text-xl md:text-2xl text-center">TATA CARA DAFTAR PKL SECARA ONLINE</h1>
                    <div class="font-bold text-sm md:text-xl flex flex-col gap-5 mt-10 ">
                        <div class="flex flex-col justify-start max-w-xl text-justify">
                            <div class="px-5 py-2 items-center flex">
                                <h1 class="bg-blue-500 text-white w-[37px] rounded-full px-3 py-1 tracking-wider mr-5">1.</h1>
                                <h2 class="text-base font-normal">Baca brosur standar pelayanan BBPPMVP BMTI</h2>
                            </div>
                            <div class="px-5 py-2 items-center flex">
                                <h1 class="bg-blue-500 text-white w-[37px] rounded-full px-3 py-1 tracking-wider mr-5">2.</h1>
                                <h2 class="text-base font-normal">lihat di unit magang untuk mengetahui minat dan bakat anda di unit mana</h2>
                            </div>
                            <ul class="list-disc ml-24 text-base font-normal">
                                <li>Tekan tombol "Unit Magang" yang berada di bagian atas</li>
                                <li>Pilih Salah satu dari 8 unit untuk mengetahui informasi lebih lanjut</li>
                            </ul>
                            <div class="px-5 py-2 items-center flex">
                                <h1 class="bg-blue-500 text-white w-[37px] rounded-full px-3 py-1 tracking-wider mr-5">3.</h1>
                                <h2 class="text-base font-normal">Baca Tata Tertib dengan menekan tombol "Download" di bawah ini</h2>
                            </div>
                            <div class="px-5 py-2 items-center">
                                <button class="bg-green-500 ml-[50px] px-4 p-1 rounded-lg hover:bg-green-600 text-lg font-bold my-3">Download</button>
                            </div>
                            <div class="px-5 py-2 items-center flex">
                                <h1 class="bg-blue-500 text-white w-[37px] rounded-full px-3 py-1 tracking-wider mr-5">4.</h1>
                                <h2 class="text-base font-normal">Setelah semua langkah-langkah di atas sudah selesai. tekan tombol "Daftar" di bawah ini
                                    untuk melanjutkan ke tahap isi formulir.
                                </h2>
                            </div>
                            <div class="px-5 py-2 items-center">
                                <button class="bg-green-500 ml-[50px] px-5 p-1 rounded-lg hover:bg-green-600 text-lg font-bold my-3">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
