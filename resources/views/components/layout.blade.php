<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <title>{{ $title }}</title>
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 650) { // Ketika scroll lebih dari 50px
                navbar.classList.add(
                    'bg-blue-500'); // Menambahkan efek blur dan background semi transparan
            } else {
                navbar.classList.remove('bg-blue-500'); // Menghilangkan efek blur saat kembali ke atas
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
    <x-navbar></x-navbar>
    {{ $slot }}
    <x-footer></x-footer>
</body>

</html>
