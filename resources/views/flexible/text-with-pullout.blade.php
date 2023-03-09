<div class="bg-white">
    <div class="container grid-cols-3 lg:grid">
        <div class="col-span-2 py-16">
            <div class="{{ $layout->reverse ? 'ml-auto' : '' }} prose">
                {!! $layout->main !!}
            </div>
        </div>
        @if ($layout->sidebar)
            <div class="{{ $layout->reverse ? 'order-first' : '' }} py-16">

                <div
                    class="{{ $layout->reverse ? '' : 'lg:ml-auto' }} prose max-w-xl text-xl font-semibold italic lg:max-w-xs">
                    <hr class="mb-4 w-48 max-w-full border-t-2 border-teal-light" />
                    {!! $layout->sidebar !!}
                </div>
            </div>
        @endif
    </div>
</div>
