<div
    class="{{ $layout->lift ? 'lg:-mb-48 -mb-32' : null }} bg-white{{ $layout->background_colour ? ' lg:pb-24' : '' }} relative py-8 lg:py-16">
    @if ($layout->background_colour)
        <div class="bg-{{ $layout->background_colour }} absolute bottom-0 left-0 h-24 w-full lg:h-48"></div>
    @endif
    <div class="container relative max-w-5xl">
        <x-image conversion="3x2" class="block w-full max-w-none" :image="$layout->image" />
    </div>
</div>
