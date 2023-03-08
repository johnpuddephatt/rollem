<div x-cloak x-data="{ currentSubProduction: '{{ $layout->subProductions->first()->slug }}' }">
    <div class="bg-black py-24 text-white">
        <h2 class="container text-right text-5xl font-bold">Series list</h3>
            <div class="container flex flex-row gap-8 overflow-x-auto scroll-smooth">
                @foreach ($layout->subProductions as $subProduction)
                    <div class="group w-2/3 flex-shrink-0 cursor-pointer pt-6 lg:w-2/5"
                        @click="$el.scrollIntoView(); currentSubProduction = '{{ $subProduction->slug }}'">
                        @if ($subProduction->image)
                            <x-image ::class="{ '!border-lilac': currentSubProduction == '{{ $subProduction->slug }}' }"
                                class="block aspect-[3/2] h-auto w-full border-4 border-transparent transition group-hover:border-white"
                                conversion="3x2" :image="$subProduction->image" />
                        @else
                            <div :class="{ '!border-lilac': currentSubProduction == '{{ $subProduction->slug }}' }"
                                class="block aspect-[3/2] h-auto w-full border-4 border-transparent bg-gray bg-opacity-20 transition group-hover:border-white">
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

            <div class="relative overflow-hidden">
                <div class="grid-cols-3 lg:container lg:grid">
                    <div class="col-span-2 pt-16 max-lg:container">
                        <h2 class="mt-16 text-6xl font-bold">{{ $subProduction->title }}</h2>

                    </div>
                    <div
                        class="relative pt-16 before:absolute before:left-0 before:top-0 before:bottom-0 before:-z-10 before:block before:w-[99999px] before:bg-gray lg:px-8">
                    </div>
                </div>
            </div>

            @if (is_object($subProduction->content))
                @foreach ($subProduction->content as $layout)
                    @include('flexible.' . $layout->name(), ['layout' => $layout])
                @endforeach
            @endif

        </div>
    @endforeach

</div>
