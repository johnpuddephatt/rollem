<div class="relative overflow-hidden">
    <div class="grid-cols-3 lg:container lg:grid">
        <div class="col-span-2 py-16 max-lg:container">
            <div class="prose:emphasise-first {{ $layout->reverse ? 'ml-auto' : '' }} prose">
                {!! $layout->main !!}
            </div>
        </div>
        <div
            class="{{ $layout->reverse ? 'order-first' : '' }} relative pt-12 before:absolute before:left-0 before:top-0 before:bottom-0 before:-z-10 before:block before:w-[99999px] before:bg-gray lg:px-8 lg:py-16">
            <div class="{{ $layout->reverse ? '' : 'ml-auto' }} max-w-xs max-lg:container">
                <h3 class="mb-6 text-lg font-semibold">{{ $layout->sidebar_title }}</h3>
                <div class="prose">
                    {!! $layout->sidebar !!}
                </div>
            </div>
        </div>
    </div>
</div>
