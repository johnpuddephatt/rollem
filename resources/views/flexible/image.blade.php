<div class="{{ $layout->lift ? '-mb-32' : null }} relative bg-white pt-12 pb-24 lg:pt-24">
    @if ($layout->background_colour)
        <div class="bg-{{ $layout->background_colour }} absolute bottom-0 left-0 h-48 w-full"></div>
    @endif
    <div class="container relative max-w-5xl">
        <x-image conversion="3x2" class="block w-full max-w-none" :image="$layout->image" />
    </div>
</div>
