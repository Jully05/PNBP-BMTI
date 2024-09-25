<a {{ $attributes }}
    class="{{ $active ? 'bg-gray-900 text-white rounded-md' : 'text-gray-300 hover:bg-gray-700 hover:text-white hover:rounded-md' }} px-3 py-2 text-sm font-medium text-white"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
