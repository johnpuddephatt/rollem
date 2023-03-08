    <div class="relative py-36">

        <div class="left-0 top-32 -z-10 min-h-[65%] w-full bg-gray py-8 lg:py-36">
            <div class="{{ $layout->reverse ? '' : 'justify-between' }} container flex flex-col gap-24 lg:flex-row">
                <div class="{{ $layout->reverse ? 'order-last' : '' }} prose max-w-lg">
                    @if ($layout->title)
                        <h2 class="mt-0 mb-0 text-4xl font-bold">{{ $layout->title }}</h2>
                    @endif
                    @if ($layout->subtitle)
                        <h3 class="mt-2 mb-0 text-xl font-bold">{{ $layout->subtitle }}</h3>
                    @endif
                    <div class="mt-4">
                        {!! $layout->main !!}</div>
                </div>

                <x-image :image="$layout->image" conversion="square"
                    class="{{ $layout->reverse ? 'order-first' : '' }} -my-16 block max-w-none object-cover lg:-my-64 lg:w-1/2" />
            </div>
        </div>

        @if ($layout->badge)
            <div
                class="absolute right-1 top-1 top-8 flex h-36 w-36 flex-col justify-center overflow-hidden rounded-full bg-red p-4 pr-0 text-lg font-bold leading-tight lg:left-1/2 lg:h-64 lg:w-64 lg:-translate-x-1/2 lg:p-16 lg:pr-0 lg:text-3xl">
                <div class="border-b-2 border-white pb-1 pr-4 text-white lg:pr-16">
                    {!! Str::markdown($layout->badge) !!}
                </div>
            </div>
        @endif

    </div>
