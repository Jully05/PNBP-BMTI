<button type="button" @click="isOpen = !isOpen" {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium flex items-center space-x-2"
    aria-current="{{ $active ? 'page' : false }}">
    <span>Unit Magang</span>
    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
    </svg>
</button>

<div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
x-transition:leave-end="opacity-0 scale-95"
class=" mt-16 flex max-w-max">
    <div
        class="w-screen max-h-[260px] max-w-md flex-auto overflow-x-auto rounded-xl text-white bg-blue-500 text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
        <div class="p-4">
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">1.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Teknik Sipil dan Perencanaan
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">2.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Teknik Pemesinan
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">3.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Elektronika dan Informatika
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">4.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Ketenagalistrikan
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">5.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Otomotif
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">6.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Febrigasi Logam
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">7.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Tenik Energi Terbarukan
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
            <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-700">
                <div>
                    <h1 class="font-semibold">8.</h1>
                </div>
                <div>
                    <a href="#" class="font-semibold">
                        Pengajaran Umum
                        <span class="absolute inset-0"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
