<{{ $layout->link ? 'a' : 'div' }} class="relative block bg-white py-8 md:grid md:grid-cols-2 lg:py-16"
    href="{{ $layout->link }}">
    @if ($layout->image)
        <x-image conversion="3x2" class="block w-full lg:my-16" :image="$layout->image" />
        <div class="bg-{{ $layout->colour ?? 'teal' }} absolute top-16 right-1/2 hidden h-16 w-16 lg:block"></div>
    @endif
    <div
        class="bg-{{ $layout->colour ?? 'teal' }} {{ $layout->reverse ? 'order-first' : null }} lg:gpy-24 relative z-10 flex flex-col justify-center p-6 py-12 text-white max-md:ml-8 max-md:-mt-8 lg:p-12">
        <p class="mb-4 text-xl font-bold text-lilac lg:text-2xl">{!! $layout->pretitle !!}</p>
        <h1 class="mb-6 max-w-lg text-3xl font-bold lg:text-5xl">{!! $layout->title !!}</h1>
        <div class="mb-8 max-w-md font-semibold">{!! $layout->description !!}</div>
        @if ($layout->link)
            <p class="w-36 border-b-2 border-lilac pb-2 text-left text-sm font-semibold">Read more</p>
        @endif
    </div>

    @if ($layout->badge)
        <div
            class="absolute right-1 -top-8 z-20 flex h-36 w-36 flex-col justify-center overflow-hidden rounded-full bg-lilac p-4 pr-0 text-lg font-bold leading-tight lg:-top-36 lg:left-1/2 lg:h-64 lg:w-64 lg:p-16 lg:pr-0 lg:text-3xl">
            <div class="border-b-2 border-white pb-1 pr-4 text-black lg:pr-16">
                {!! Str::markdown($layout->badge) !!}
            </div>
        </div>
    @endif
    </{{ $layout->link ? 'a' : 'div' }}>
