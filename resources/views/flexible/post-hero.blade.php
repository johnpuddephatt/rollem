<div class="relative flex h-[70vh] flex-col justify-end bg-black pb-12 text-white lg:h-[80vh]">
    <div class="pointer-events-none absolute top-0 left-0 right-0 h-64 bg-gradient-to-b from-[#000000aa] to-transparent">
    </div>
    <div id="hero-text" class="container">
        <h1 class="max-w-6xl text-6xl font-bold !tracking-normal text-lilac lg:text-7xl 2xl:text-8xl">
            {!! nl2br($layout->title) !!}</h1>
        <div>
            <p class="mt-6 text-3xl font-bold text-white">{{ $post->published_at->format('jS F y') }}</p>
            @if ($post->author)
                <a href="{{ route('user.show', ['user' => $post->author->slug]) }}"
                    class="mt-6 flex flex-row items-center gap-4">
                    @if ($post->author->photo)
                        <div class="h-16 w-16 overflow-hidden rounded-full">
                            <img class="-ml-5 -mt-1.5 h-auto w-28 max-w-none"
                                src="{{ $post->author->photo->getUrl('portrait') }}">
                        </div>
                    @endif
                    <div class="text-sm leading-tight">
                        <h3>Written by:</h3>
                        <p>{{ $post->author->name }}, {{ $post->author->role }}</p>
                    </div>
                </a>
            @endif
        </div>
    </div>
</div>

<div
    class="@if ($post->author) lg:-mt-44 @else lg:-mt-24 @endif relative z-10 ml-auto lg:w-1/2 2xl:w-1/2">
    <x-image conversion="3x2" :image="$layout->image" class="h-full w-full object-cover" />
</div>
