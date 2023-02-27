<div class="relative -z-10 flex h-screen flex-col justify-end bg-black pb-64 text-white lg:h-[75vh]">
    <div id="hero-text" class="container">
        <h1 class="max-w-6xl text-6xl font-bold !tracking-normal text-lilac lg:text-7xl lg:text-8xl">
            {!! nl2br($layout->title) !!}</h1>
    </div>
</div>

<div class="ml-auto -mt-48 lg:w-3/4 xl:w-2/3 2xl:w-1/2">
    @if ($layout->responsiveImage)
        {!! $layout->responsiveImage !!}
    @elseif($layout->image)
        <img class="h-full w-full object-cover" src="{{ Storage::disk('public')->url($layout->image) }}" alt="">
    @endif
</div>
