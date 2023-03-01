<div class="bg-white">
    <div class="container grid-cols-3 lg:grid">
        <div class="col-span-2 py-16">
            <div class="prose">
                {!! $layout->main !!}
            </div>
        </div>
        <div class="py-16 xl:pl-0">

            <div class="prose ml-auto max-w-xl text-xl font-semibold italic lg:max-w-xs">
                <hr class="mb-4 w-48 max-w-full border-t-2 border-teal-light" />
                {!! $layout->sidebar !!}
            </div>
        </div>
    </div>
</div>
