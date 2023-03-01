@props(['post', 'wide' => false])
<a href="{{ $post->url }}" {{ $attributes->class(['mb-16 md:mb-0']) }}>
    <x-image conversion="3x2" :image="$post->image" class="h-auto w-full" />
    <div class="{{ $wide ? 'md:p-8 xl:p-12  justify-center max-w-lg' : 'max-w-xs flex-grow' }} flex flex-col">
        <h3 class="{{ $wide ? 'md:text-4xl lg:mt-0 ' : '' }} mt-8 mb-4 text-2xl font-bold">{{ $post->title }}.</h3>
        <p class="mb-8 h-12 text-sm">{{ $post->introduction }}</p>
        <p class="{{ $wide ? null : 'mt-auto' }} w-36 border-b-2 border-teal-light pb-2 text-left font-semibold">Read
            more
        </p>
    </div>
</a>
