<a href="{{ $production->url }}" class="relative md:grid md:grid-cols-2">

    @if ($production->image)
        <img class="mt-16 w-full" src="{{ Storage::disk('public')->url($production->image) }}" alt="">
        <div
            class="@if ($flip) bg-black left-1/2  @else bg-teal right-1/2 @endif absolute top-0 hidden h-16 w-16 md:block">
        </div>
    @endif
    <div
        class="@if ($flip) -order-1 bg-black @else bg-teal @endif relative z-10 flex flex-col justify-center p-12 text-white max-md:ml-8 max-md:-mt-8">
        <h1 class="mb-6 text-5xl font-bold">{!! $production->title !!}</h1>
        <div class="mb-8 max-w-md font-semibold">{!! $production->introduction !!}</div>
        <p class="w-36 border-b-2 border-lilac pb-2 text-left text-sm font-semibold">Read more</p>
    </div>
</a>
