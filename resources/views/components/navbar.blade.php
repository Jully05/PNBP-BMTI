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
    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu"></div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) { // Ketika scroll lebih dari 50px
            navbar.classList.add('backdrop-blur-lg', 'bg-white/30'); // Menambahkan efek blur dan background semi transparan
        } else {
            navbar.classList.remove('backdrop-blur-lg', 'bg-white/30'); // Menghilangkan efek blur saat kembali ke atas
        }
    });
</script>
