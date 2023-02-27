<a href="{{ $layout->post->url }}" class="relative lg:grid lg:grid-cols-2">
    @if ($layout->post->image)
        <img class="mt-16 w-full" src="{{ Storage::disk('public')->url($layout->post->image) }}" alt="">
        <div class="absolute top-0 right-1/2 hidden h-16 w-16 bg-teal md:block"></div>
    @endif
    <div class="relative z-10 flex flex-col justify-center bg-teal p-12 text-white max-md:ml-8 max-md:-mt-8">

        <h1 class="mb-6 text-5xl font-bold">{!! $layout->post->title !!}</h1>
        <div class="mb-8 max-w-md">{!! $layout->post->introduction !!}</div>
        <p class="w-36 border-b-2 border-lilac pb-2 text-left text-sm font-semibold">Read more</p>
    </div>
</a>
