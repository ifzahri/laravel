<a
    {{ $attributes }}
    class="{{ $active ? "bg-black text-white" : "text-white hover:bg-black hover:text-white" }} rounded-md px-4 py-2 text-sm font-medium transition-all duration-300 ease-in-out"
    aria-current="{{ $active ? "page" : false }}"
>
    {{ $slot }}
</a>
