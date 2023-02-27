<div class="relative py-24">
    @if ($layout->background_colour)
        <div class="bg-{{ $layout->background_colour }} absolute bottom-0 left-0 -z-10 h-48 w-full"></div>
    @endif
    <div class="container grid grid-cols-3 gap-4">
        @if ($layout->image)
            <img class="col-span-2 block h-full w-full max-w-none object-cover"
                src="{{ Storage::disk('public')->url($layout->image) }}" alt="">
        @endif

        @if ($layout->secondary_image)
            <img class="block h-full w-full max-w-none object-cover"
                src="{{ Storage::disk('public')->url($layout->secondary_image) }}" alt="">
        @endif
    </div>

</div>
