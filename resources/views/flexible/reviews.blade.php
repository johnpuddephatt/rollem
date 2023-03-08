@if (count($layout->reviews))
    <div class="relative bg-black pb-24 text-white" x-data="{ activeReview: 0 }" x-cloak>

        <div class="container relative flex min-h-[24rem] max-w-3xl flex-row items-end justify-center">

            @if (count($layout->reviews) > 1)
                <button class="absolute max-lg:bottom-16 max-lg:left-8 lg:right-full lg:bottom-28 lg:pr-8"
                    aria-label="Previous review"
                    x-on:click.prevent="activeReview = (activeReview > 0) ? ( activeReview - 1) : {{ count($layout->reviews) - 1 }} ">@svg('chevron-down', 'block w-6 h-4 lg:w-10 lg:h-6 origin-center rotate-90')</button>
                <button class="absolute max-lg:bottom-16 max-lg:right-8 lg:left-full lg:bottom-28 lg:pl-8"
                    aria-label="Next review"
                    x-on:click.prevent="activeReview = (activeReview < {{ count($layout->reviews) - 1 }}) ?  (activeReview + 1) : 0">@svg('chevron-down', 'block w-6 h-4 lg:w-10 lg:h-6 origin-center -rotate-90')</button>
            @endif

            @foreach ($layout->reviews as $review)
                <{{ $review->url ? 'a' : 'div' }} href="{{ $review->url }}" class="text-center transition"
                    x-transition:enter="opacity-0 absolute top-24 left-0" x-transition:leave="opacity-0"
                    x-show="activeReview == {{ $loop->index }}">
                    @if ($review->name)
                        <p class="mb-6 font-semibold">{{ $review->name }}</p>
                    @endif
                    @if ($review->review)
                        <blockquote class="mb-12">
                            <p class="relative text-3xl font-semibold italic lg:text-4xl">“{{ $review->review }}”</p>
                        </blockquote>
                    @endif
                    <div class="mb-12 flex flex-row items-center justify-center gap-2">
                        @if ($review->rating)
                            @foreach (range(0, $review->rating) as $rating)
                                @svg('star', 'w-6 h-6 lg:w-10 lg:h-10')
                            @endforeach
                        @endif
                        @if ($review->publication)
                            <cite class="ml-6 text-xl font-bold not-italic">
                                <x-publication-logo class="h-8 w-full" :publication="$review->publication" />
                            </cite>
                        @endif
                    </div>

                    @if ($review->url)
                        <p class="mx-auto w-36 border-b-2 border-lilac pb-2 text-left text-sm font-semibold">Read more
                        </p>
                    @endif
                    </{{ $review->url ? 'a' : 'div' }}>
            @endforeach

        </div>

    </div>
@endif
