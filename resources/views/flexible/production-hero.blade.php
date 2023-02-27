<div class="relative -z-10 flex h-screen flex-col items-center justify-end bg-black text-white">
    @if ($layout->responsiveImage)
        {!! $layout->responsiveImage !!}
    @elseif($layout->image)
        <img id="hero-image" class="fixed inset-0 h-full w-full object-cover"
            src="{{ Storage::disk('public')->url($layout->image) }}" alt="">
    @endif
    <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
    <div id="hero-text" class="container relative z-10 mb-12 max-w-3xl text-center opacity-90">
        <h1 class="mb-8text-center text-6xl font-bold !tracking-normal text-lilac lg:text-8xl">{!! nl2br($layout->title) !!}
        </h1>

    </div>
</div>
