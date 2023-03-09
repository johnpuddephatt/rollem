<div class="bg-white">
    <div class="container grid lg:grid-cols-3">
        <div class="col-span-2 py-8 lg:py-16">
            <div class="{{ $layout->reverse ? 'ml-auto' : '' }} prose">
                {!! $layout->main !!}
            </div>
        </div>
        @if ($layout->sidebar)
            <div class="{{ $layout->reverse ? 'order-first' : 'order-first lg:order-none' }} pb-8 lg:py-16">

                <div
                    class="{{ $layout->reverse ? '' : 'lg:ml-auto' }} prose max-w-xl text-xl font-bold italic lg:max-w-xs">
                    <hr class="mb-4 w-48 max-w-full border-t-2 border-teal-light" />
                    {!! $layout->sidebar !!}
                </div>
            </div>
        @endif
    </div>
</div>
