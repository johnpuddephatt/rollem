<div x-cloak x-data="{ currentSubProduction: '{{ $layout->subProductions->first()->slug }}' }">
    <div class="bg-black py-24 text-white">
        <h2 class="container text-right text-5xl font-bold">Series list</h3>
            <div class="container flex flex-row gap-8 overflow-x-auto scroll-smooth">
                @foreach ($layout->subProductions as $subProduction)
                    <div class="group w-2/3 flex-shrink-0 cursor-pointer pt-6 lg:w-2/5"
                        @click="$el.scrollIntoView(); currentSubProduction = '{{ $subProduction->slug }}'">
                        @if ($subProduction->image)
                            <x-image ::class="{ '!border-lilac': currentSubProduction == '{{ $subProduction->slug }}' }"
                                class="border-transparent block aspect-[3/2] h-auto w-full border-4 transition group-hover:border-white"
                                conversion="3x2" :image="$subProduction->image" />
                        @else
                            <div :class="{ '!border-lilac': currentSubProduction == '{{ $subProduction->slug }}' }"
                                class="border-transparent block aspect-[3/2] h-auto w-full border-4 bg-gray bg-opacity-20 transition group-hover:border-white">
                            </div>
                        @endif
                        <h3 class="pt-2 text-lg font-semibold">{{ $subProduction->title }}</h3>
                    </div>
                @endforeach
            </div>
    </div>

    @foreach ($layout->subProductions as $subProduction)
        <div id="subproduction-{{ $subProduction->slug }}"
            x-show="currentSubProduction == '{{ $subProduction->slug }}'">

            <h2 class="container mt-16 mb-24 text-6xl font-bold">{{ $subProduction->title }}</h2>
            @foreach ($subProduction->content as $layout)
                @include('flexible.' . $layout->name(), ['layout' => $layout])
            @endforeach
        </div>
    @endforeach

</div>
