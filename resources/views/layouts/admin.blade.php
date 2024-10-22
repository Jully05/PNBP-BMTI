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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrQdP9kPzQ9GMRRO9boM4rK7Huvm+NTIOVZ76v6IX7DQDmw/nzKfT7u15yB+W6AGZ/xxbkZoT7x1g3YFsg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <!-- Tambahan FullCalendar CSS dan JS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/scripts.js') }}"></script>
    <title>Show</title>
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
    @yield('content')
    <x-footer></x-footer>
</body>

</html>
