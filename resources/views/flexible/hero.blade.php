@php($embed = isset($layout->trailer) ? OEmbed::get($layout->trailer) : null)

<div x-data="{ trailerOpen: false, trailerLoaded: false }" class="relative flex h-screen flex-col items-center justify-end text-white">
    <div class="pointer-events-none absolute top-0 left-0 right-0 h-64 bg-gradient-to-b from-[#000000aa] to-transparent">
    </div>
    <div class="fixed inset-0 top-36 -z-10 bg-black">

        @if ($layout->video)
            <video autoplay playsinline loop muted id="hero-image"
                class="absolute inset-0 h-full w-full object-cover opacity-0 transition duration-1000"
                oncanplaythrough="this.classList.remove('opacity-0')" src="{{ $layout->video->url }}" />
        @else
            <x-image conversion="3x2"class="absolute inset-0 h-full w-full object-cover" :image="$layout->image" />
        @endif
    </div>
    <div class="absolute inset-0 bg-gradient-to-t from-black"></div>

    <div id="hero-text" class="relative z-10 mb-12 text-center opacity-90">
        <h1 class="mb-8 text-5xl font-bold lg:text-7xl">{!! nl2br($layout->title) !!}</h1>
        <p class="mx-auto mb-16 max-w-2xl text-xs font-semibold lg:text-xl">{!! nl2br($layout->subtitle) !!}</p>

        @if ($embed)
            <button x-on:click="trailerLoaded = true; trailerOpen = true;" class="mx-auto w-20"
                aria-label="Play trailer">
                @svg('play', 'h-20 w-20')
            </button>
        @endif

    </div>
    @if ($embed)
        <template x-if="trailerLoaded && trailerOpen">
            <div x-transition x-show="trailerOpen" class="absolute inset-0 z-30 bg-black bg-opacity-80">
                <div class="absolute left-1/2 top-1/2 w-full max-w-5xl -translate-x-1/2 -translate-y-1/2 transform">

                    <div class="shadow-black-light relative shadow-2xl"
                        style="padding-top: {{ ($embed->data()['height'] / $embed->data()['width']) * 100 }}%">
                        {!! $embed->html(['class' => 'inset-0 absolute w-full h-full']) !!}
                    </div>

                    <button x-on:click="trailerOpen = false"
                        class="type-xs-mono hover:bg-black-light mx-auto mt-6 flex cursor-pointer flex-row items-center gap-2 rounded-full pr-4 leading-none text-white transition hover:bg-opacity-75">
                        @svg('plus', 'rotate rotate-45 text-white w-10 h-10 p-3 bg-black rounded-full') Close trailer
                    </button>

                </div>
            </div>
        </template>
    @endif
</div>
