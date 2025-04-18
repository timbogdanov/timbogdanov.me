@props([
    'title' => 'Divider Title'
])

<div class="flex items-center space-x-4 mb-2 mt-6">
    <h2 class="text-xl font-sans-condensed font-medium text-[#81796D] dark:text-[#F2ECE2]">
        {{ $title }}
    </h2>
    <div class="flex-1 h-px bg-[#DDD2C1] dark:bg-[#222222]"></div>
</div>
