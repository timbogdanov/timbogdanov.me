<a
    href="{{ $href }}"
    target="{{ $target }}"
    class="group flex items-center p-2 rounded-md dark:bg-[#1A1813] dark:hover:bg-[#25231B]"
>
    @if ($icon)
        <x-dynamic-component
            :component="$icon"
            class="mr-3 h-4 fill-current dark:fill-[#8F877B] group-hover:dark:fill-[#999185]"
        />
    @endif

    <x-arrow class="h-4 fill-current dark:fill-[#8F877B] group-hover:dark:fill-[#999185]" />
</a>
