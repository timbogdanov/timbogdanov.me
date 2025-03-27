{{-- resources/views/components/title-divider.blade.php --}}
@props([
    'title' => 'Divider Title'
])

<div class="flex items-center space-x-4 my-6">
    <h2 class="text-xl font-bold text-[#F2ECE2]">
        {{ $title }}
    </h2>
    <div class="flex-1 h-px bg-[#2B2A25]"></div>
</div>
