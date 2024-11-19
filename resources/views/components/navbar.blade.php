<nav id="navbar" class="fixed top-0 left-0 w-full z-20" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="pr-[300px]">
                    <a href="/">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="img/logo-bmti.png" alt="Your Company">
                        </div>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-center space-x-4">
                        <!-- Navigation Links -->
                        <x-nav-link href="/" :active="request()->is('/')">
                            <div class="flex justify-center items-center">
                                <svg class="w-5 h-5 mr-3 rtl:rotate-[270deg] mb-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 3L3 9h2v6h4V11h2v4h4V9h2L9 3z" />
                                </svg>
                                <h1>HOME</h1>
                            </div>
                        </x-nav-link>
                        <x-nav-link href="/fasilitas" :active="request()->is('fasilitas')">Fasilitas Lembaga</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Pelayanan PKL</x-nav-link>
                        <x-nav-link href="/kunjin" :active="request()->is('kunjin')">Kunj-In</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-gray-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-white/40 focus:ring-offset-2 focus:ring-offset-blue-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" id="mobile-menu" x-show="isOpen">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/" :active="request()->is('/')">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 rtl:rotate-[270deg] mb-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 3L3 9h2v6h4V11h2v4h4V9h2L9 3z" />
                    </svg>
                    <h1>Home</h1>
                </div>
            </x-nav-link>
            <x-nav-link href="/fasilitas" :active="request()->is('fasilitas')">Layanan Penggunaan Fasilitas
                Lembaga</x-nav-link>
            <x-nav-link href="/register" :active="request()->is('register')">Layanan Magang ( PKL )</x-nav-link>
            <x-nav-link href="#" :active="request()->is('#')">Layanan Kunjungan ( Studi Tour )</x-nav-link>
        </div>
    </div>
</nav>
