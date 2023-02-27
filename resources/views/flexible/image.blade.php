<div class="relative py-24">
    @if ($layout->background_colour)
        <div class="bg-{{ $layout->background_colour }} absolute bottom-0 left-0 -z-10 h-48 w-full"></div>
    @endif
    <div class="container">
        @if ($layout->image)
            <img class="block w-full max-w-none" src="{{ Storage::disk('public')->url($layout->image) }}" alt="">
        @endif
    </div>

</div>
