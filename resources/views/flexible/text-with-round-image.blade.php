<div class="bg-white container gap-24 py-12">
    <div class="max-w-6xl flex-row items-center justify-between gap-4 lg:flex lg:gap-8">
        @if ($layout->image)
            <img class="{{ $layout->large ? 'h-64 w-64 lg:h-96 lg:w-96' : 'h-48 w-48 lg:h-64' }} rounded-full lg:w-64"
                src="{{ Storage::disk('public')->url($layout->image) }}" alt="">
        @endif
        <div class="@if ($layout->reverse) lg:-order-1 @endif prose col-span-2 max-w-2xl pt-8 lg:py-16">
            @if ($layout->title)
                <h2 class="mt-0 mb-0 text-3xl font-bold">{{ $layout->title }}</h2>
            @endif
            @if ($layout->subtitle)
                <h3 class="mt-2 mb-0 text-xl font-bold">{{ $layout->subtitle }}</h3>
            @endif
            <div class="mt-4">
                {!! $layout->main !!}</div>
        </div>

    </div>
</div>
