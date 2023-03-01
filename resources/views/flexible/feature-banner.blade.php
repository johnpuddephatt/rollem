<{{ $layout->link ? 'a' : 'div' }} class="relative bg-white md:grid md:grid-cols-2"
    {{ $layout->link ? 'href="' . $layout->link . '"' : null }}>
    @if ($layout->image)
        <x-image conversion="3x2" class="mt-16 w-full" :image="$layout->image" />
        <div class="bg-{{ $layout->colour ?? 'teal' }} absolute top-0 right-1/2 hidden h-16 w-16 md:block"></div>
    @endif
    <div
        class="bg-{{ $layout->colour ?? 'teal' }} relative z-10 flex flex-col justify-center p-12 text-white max-md:ml-8 max-md:-mt-8">
        <p class="mb-4 text-xl font-bold text-lilac lg:text-2xl">{!! $layout->pretitle !!}</p>
        <h1 class="mb-6 max-w-lg text-4xl font-bold lg:text-5xl">{!! $layout->title !!}</h1>
        <div class="mb-8 max-w-md font-semibold">{!! $layout->description !!}</div>
        @if ($layout->link)
            <p class="w-36 border-b-2 border-lilac pb-2 text-left text-sm font-semibold">Read more</p>
        @endif
    </div>
    </{{ $layout->link ? 'a' : 'div' }}>
