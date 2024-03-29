<div x-cloak x-data="{ currentSubProduction: '{{ $layout->subProductions->first()->slug }}' }">
    <div class="bg-black py-24 text-white">
        <h2 class="container text-right text-4xl font-bold lg:text-5xl">Series list</h2>
        <div class="container flex flex-row gap-8 overflow-x-auto scroll-smooth scrollbar-hide">
            @foreach ($layout->subProductions as $subProduction)
                <div class="group w-2/3 flex-shrink-0 cursor-pointer pt-6 lg:w-2/5"
                    @click="$el.scrollIntoView(); currentSubProduction = '{{ $subProduction->slug }}'">
                    @if ($subProduction->image)
                        <div class="relative border-4 border-transparent group-hover:border-white"
                            :class="{ '!border-lilac': currentSubProduction == '{{ $subProduction->slug }}' }">
                            <x-image class="block aspect-[3/2] h-auto w-full transition" conversion="3x2"
                                :image="$subProduction->image" />
                            <div
                                class="absolute left-0 right-0 bottom-0 z-10 h-24 bg-gradient-to-t from-black to-transparent">
                            </div>
                        </div>
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
                    <div class="col-span-2 pt-12 max-lg:container lg:pt-16">
                        <h2 class="text-4xl font-bold lg:text-6xl">{{ $subProduction->title }}</h2>

                    </div>
                    <div
                        class="relative hidden pt-16 before:absolute before:left-0 before:top-0 before:bottom-0 before:-z-10 before:block before:w-[99999px] before:bg-gray lg:block lg:px-8">
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
