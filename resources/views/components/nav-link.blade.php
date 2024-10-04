<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900/70 text-white' : 'md:text-gray-300 text-white hover:bg-blue-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
