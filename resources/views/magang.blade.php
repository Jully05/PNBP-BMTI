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

        <header class="bg-blue-500 shadow h-screen flex justify-center items-center">
            <div
                class=" flex flex-col justify-center items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 min-h-[200px]">
                <img class="w-[120px] h-[120px]" src="img/logo-bmti.png" alt="Logo">
                <h1
                    class="text-2xl md:text-5xl font-inter font-bold text-neutral-50 mt-[60px] tracking-wider text-center">
                    Layanan Magang ( PKL )</h1>
            </div>
        </header>

        <div class="min-h-full mx-10 mt-10">
            <main>
                <div class="flex justify-center">
                    <div class="bg-neutral-100 w-[50%] h-[400px] flex justify-center items-center">
                        <div class="bg-neutral-100 w-[90%] h-[90%] px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1
                                    class="font-bold tracking-wider text-white text-xl bg-blue-500 rounded-lg text-center w-44">
                                    BBPPMPV BMTI</h1>
                                <p>Selamat datang di program Praktik Kerja Lapangan (PKL) di Balai Besar Pengembangan
                                    Penjaminan Mutu Pendidikan Vokasi Bidang Mesin dan Teknik Industri (BBPPMPV MTI).
                                    Kami memberikan kesempatan kepada siswa/mahasiswa untuk mendapatkan pengalaman
                                    langsung di dunia kerja melalui program PKL yang dirancang untuk memperkuat
                                    keterampilan dan pengetahuan di bidang teknik industri dan mesin.</p>
                                <p>PKL di BBPPMPV MTI merupakan program magang yang ditujukan untuk siswa SMK, mahasiswa
                                    D3, dan mahasiswa S1 yang ingin mendalami keahlian mereka dalam bidang teknik mesin,
                                    elektro, dan teknologi industri. Program ini memungkinkan peserta untuk belajar
                                    langsung di lingkungan profesional dengan dukungan dari para ahli yang berpengalaman
                                    di bidangnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-[50%] h-[400px] flex justify-center items-center">
                        <div class="w-[90%] h-[90%] shadow-2xl rounded-lg">
                            <img src="img/background.jpg" class="w-full h-full rounded-lg" alt="">
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center mt-10">
                    <div class="w-[50%] h-[400px] flex justify-center items-center">
                        <div class="bg-neutral-100 w-[90%] h-full px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1
                                    class="text-blue-900 bg-yellow-500 text-center py-2 md:text-4xl rounded-lg shadow-xl font-bold tracking-wide">
                                    Persyaratan Administrasi</h1>
                                <ul class="list-decimal mx-5 flex flex-col gap-4 mt-5 text-xl px-5">
                                    <li>
                                        Terdaftar dalam surat pemanggilan
                                    </li>
                                    <li>
                                        Membuat proposal sesuai dengan jurusan yang ada disekolah
                                    </li>
                                    <li>
                                        Mengisi biodata dan menyerahkan pas foto 3x4 sebanyak 2 lembar
                                    </li>
                                    <li>
                                        Menyerahkan laporan kegiatan selama PKL/ Prakerin / Penelitian Magang
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-[50%] h-[400px] flex justify-center items-center">
                        <div class="bg-neutral-100 w-[90%] h-full px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1
                                    class="text-blue-900 bg-yellow-500 text-center py-2 md:text-4xl rounded-lg shadow-xl font-bold tracking-wide">
                                    Sistem, Mekanisme dan Prosedur Pekayaan</h1>
                                <ul class="list-decimal mx-5 flex flex-col gap-4 mt-5 text-xl px-5">
                                    <li>
                                        Sekolah/Universitas/Perguruan tinggi mengajukan surat permohonan dan melampirkan
                                        proposal.
                                    </li>
                                    <li>
                                        BBPPMV BMTI memproses surat balasan ke pihak pemohon.
                                    </li>
                                    <li>
                                        siswa memulai kegiatan PKL di BBPPMV BMTI
                                    </li>
                                    <li>
                                        Surat Keterangan/ sertifikat keluar bila laporan pkl sudah selesai
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center">
                    <div class="w-[50%] h-[400px] flex justify-center items-center">
                        <div class="bg-neutral-100 w-[90%] h-[80%] px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1
                                    class="text-blue-900 bg-yellow-500 text-center py-2 md:text-4xl rounded-lg shadow-xl font-bold tracking-wide">
                                    Jangka Waktu Penyelesaian</h1>
                                <ul class="list-disc mx-5 flex flex-col gap-4 mt-5 text-xl px-5">
                                    <li>
                                        5 hari kerja untuk surat jawaban permohonan PKL
                                    </li>
                                    <li>
                                        7 hari untuk penerbitan sertifikat (bila laporan sudah di terima oleh kepala
                                        unit tempat peserta magang)
                                    </li>
                                    <li>
                                        1 bulan untuk penyerahan surat keterangan sertifikat
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="w-[50%] h-[400px] flex justify-center items-center">
                        <div class="bg-neutral-100 w-[90%] h-[80%] px-4 py-2 shadow-2xl rounded-lg">
                            <div class="flex flex-col item-center justify-center text-justify gap-3">
                                <h1
                                    class="text-blue-900 bg-yellow-500 text-center py-2 text-4xl rounded-lg shadow-xl font-bold tracking-wide">
                                    Produk Layanan</h1>
                                <div class="text-xl mt-5 flex flex-col gap-2">
                                    <h1>Pelaksanaan PKL/Prakerin</h1>
                                    <h1>Penelitian/Magang</h1>
                                </div>
                                <h1
                                    class="text-blue-900 bg-yellow-500 text-center py-2 text-4xl rounded-lg shadow-xl font-bold tracking-wide">
                                    Biaya</h1>
                                <h1 class="text-xl">Tidak Berbayar ( GRATIS! )</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex h-[300px] justify-center items-center">
                    <div class="justify-center">
                        <div class="text-center my-16 font-bold text-3xl">
                            <h1>Cek Jurusan Yang Tersedia</h1>
                        </div>
                        <div>
                            <div
                                class="bg-blue-500 w-[800px] items-center h-16 rounded-md px-4 py-2 flex justify-evenly">
                                <div class="bg-white px-2 py-1 rounded-md">
                                    <label for="dropdown">Pilih Jurusan:</label>
                                    <select id="dropdown" name="options" class="px-2 py-[3px]">
                                        <option value="option1">Teknik Sipil dan Perencanaan</option>
                                        <option value="option2">Tenik Pemensinan</option>
                                        <option value="option3">Elektroniks dan Informatika</option>
                                        <option value="option4">Ketenagalistrikan</option>
                                        <option value="option5">Otomotif</option>
                                        <option value="option6">Febrigasi Logam</option>
                                        <option value="option7">Teknik Energi Terbarukan</option>
                                        <option value="option8">Pengajaran Umum</option>
                                    </select>
                                </div>
                                <div>
                                    <a href=""
                                        class="bg-green-500 px-6 py-2 rounded-md hover:bg-green-700 text-white font-bold tracking-wider">Daftar
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="mt-7 text-red-600">
                            <p>
                                Catatan: Pastikan untuk memeriksa ketersediaan kuota jurusan sebelum mendaftar (maksimal
                                dalam 4 bulan)
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="text-center py-20 text-3xl font-bold">
                        <h1>Benefit Selama PKL di BBPPMPV BTMI</h1>
                    </div>
                    <div class="flex justify-evenly text-center font-bold">
                        <div class="flex flex-col justify-center gap-5">
                            <div class="flex justify-center">
                                <h1
                                    class="bg-blue-500 text-5xl w-[90px] py-5 rounded-full text-white">
                                    1.</h1>
                            </div>
                            <p class="text-xl">Pengalaman dan Keterampilan Praktis</p>
                        </div>
                        <div class="flex flex-col justify-center gap-5">
                            <div class="flex justify-center">
                                <h1
                                    class="bg-blue-500 text-5xl w-[90px] py-5 rounded-full text-white">
                                    2.</h1>
                            </div>
                            <p class="text-xl">Bimbingan dari Profesional</p>
                        </div>
                        <div class="flex flex-col justify-center gap-5">
                            <div class="flex justify-center">
                                <h1
                                    class="bg-blue-500 text-5xl w-[90px] py-5 rounded-full text-white">
                                    3.</h1>
                            </div>
                            <p class="text-xl">Sertifikat dan Peluang Karir</p>
                        </div>
                    </div>
                </div>
            </main>
            <div class="h-[200px]"></div>
        </div>
    </div>
</body>

</html>
