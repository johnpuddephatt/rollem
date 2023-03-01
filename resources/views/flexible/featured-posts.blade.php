@if ($layout->posts->count())
    <div class="bg-white pb-8 pt-0 max-lg:container lg:pb-24 lg:pt-0">
        <x-post-card class="block md:grid md:grid-cols-2" :wide="true" :post="$layout->posts->first()" />
        <div class="lg:container">
            <div class="gap-16 md:mt-24 md:grid md:grid-cols-3">
                <div class="border-teal-light xl:border-r-2"></div>
                @foreach ($layout->posts->skip(1) as $post)
                    <x-post-card class="flex flex-col" :post="$post" />
                @endforeach
            </div>
        </div>
    </div>
@endif
