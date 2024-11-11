<header class="relative shadow md:h-5/6 h-3/6 flex justify-center items-center">
    <img src="img/headerimg.png" alt="" class="absolute inset-0 w-full h-full object-cover opacity-90 z-0">
    <div class="absolute inset-0 bg-black opacity-40"></div>
    <div
        class="relative flex flex-col justify-center items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 min-h-[200px] z-10">
        <img class="md:w-[120px] md:h-[120px] w-[100px] h-[100px]" src="img/logo-bmti.png" alt="Logo">
        <h1 class="text-2xl md:text-5xl font-inter font-bold text-white mt-[60px] tracking-wider text-center">
            {{ $slot }}</h1>
    </div>
</header>
