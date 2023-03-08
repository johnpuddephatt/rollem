<div class="{{ $layout->colour == 'red' ? 'bg-black pt-12 lg:pt-24' : 'bg-white' }} pb-4 lg:pb-24">
    <div class="container max-w-5xl">
        <{{ $layout->link ? 'a' : 'div' }} {{ $layout->link ? 'target=_blank href=' . $layout->link : null }}
            class="bg-{{ $layout->colour }} {{ $layout->colour == 'red' ? null : 'lg:pr-64' }} relative block">
            <x-image :image="$layout->image" conversion="3x2" class="block w-full" />

            <div
                class="{{ $layout->colour == 'red' ? 'right-0' : 'right-64' }} absolute bottom-0 left-0 flex w-full flex-row items-end gap-4 bg-gradient-to-t from-[#000000aa] to-transparent px-4 pt-24 pb-4 lg:gap-8 lg:px-12 lg:pb-8">
                @svg('play', 'h-16 w-16 lg:h-24 lg:w-24')
                <div>
                    @if ($layout->pretitle)
                        <p class="mb-4 text-2xl font-semibold text-white">{{ $layout->pretitle }}</p>
                    @endif
                    <h2 class="text-3xl font-bold text-white antialiased lg:text-5xl">{{ $layout->title }}</h2>
                    @if ($layout->subtitle)
                        <p class="text-lg font-semibold text-white lg:mt-4">{{ $layout->subtitle }}</p>
                    @endif
                </div>
            </div>
            @if ($layout->badge)
                <div
                    class="{{ $layout->colour == 'red' ? 'bg-red' : 'bg-white' }} absolute right-1 top-1 flex h-36 w-36 flex-col justify-center overflow-hidden rounded-full p-4 pr-0 text-lg font-bold leading-tight lg:top-8 lg:right-16 lg:h-64 lg:w-64 lg:p-16 lg:text-3xl">
                    <div
                        class="text-{{ $layout->colour }} {{ $layout->colour == 'red' ? 'border-white text-white' : 'last-child:text-black border-' . $layout->colour }} border-b-2 pb-1 pr-4 lg:pr-8">
                        {!! Str::markdown($layout->badge) !!}
                    </div>
                </div>
            @endif
            </{{ $layout->link ? 'a' : 'div' }}>
    </div>
</div>
