@props(['active' => false])

<a {{ $attributes }}
    class="{{ $active ? 'md:border-b-4 bg-blue-700 md:bg-transparent  border-blue-900 text-white' : 'md:text-gray-300 text-white hover:text-white  hover:border-b-2 hover:border-blue-900' }} block px-3 py-2 md:py-4 text-base font-medium"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
