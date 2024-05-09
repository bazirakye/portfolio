<a href="{{ $href }}" target="{{ $target }}"
    {{ $attributes->class([
        'inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-primary ',
        'hover:bg-blue-dark lg:px-7' => $variant === 'outline-primary',
        'hover:bg-red-dark lg:px-7' => $variant === 'outline-red',
        'inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-danger hover:bg-grey-dark lg:px-7' =>
            $variant === 'outline-grey',
    ]) }}>
    {{ $slot }}
</a>
