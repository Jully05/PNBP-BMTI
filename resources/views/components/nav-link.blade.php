@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'md:border-b-4 bg-blue-700 md:bg-transparent  border-white text-white' : 'text-white hover:text-white hover:bg-gray-950/40 hover:md:py-2 rounded-md' }} block px-3 py-2 md:py-4 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
