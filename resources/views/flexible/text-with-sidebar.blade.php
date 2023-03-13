<div class="relative overflow-hidden py-8 lg:py-16">
    <div class="grid gap-8 lg:container lg:grid-cols-3 lg:gap-0">
        <div class="max-lg:container lg:col-span-2">
            <div class="prose:emphasise-first {{ $layout->reverse ? 'ml-auto' : '' }} prose">
                {!! $layout->main !!}
            </div>
        </div>
        <div
            class="{{ $layout->reverse ? 'order-first' : '' }} relative before:absolute before:left-0 before:top-0 before:bottom-0 before:-z-10 before:block before:w-[99999px] before:bg-gray lg:px-8">
            <div class="{{ $layout->reverse ? '' : 'ml-auto' }} max-lg:container lg:max-w-xs">
                @if ($layout->sidebar_title)
                    <h3 class="mb-6 text-lg font-semibold">{{ $layout->sidebar_title }}</h3>
                @endif
                <div class="prose-compact prose">
                    {!! $layout->sidebar !!}
                </div>
            </div>
        </div>
    </div>
</div>
