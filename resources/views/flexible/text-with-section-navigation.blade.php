<div class="grid-cols-3 bg-white lg:grid">
    <div class="prose:emphasise-first container prose col-span-2 py-16">
        {!! $layout->main !!}
    </div>
    <div class="container py-16 xl:pl-0">
        <hr class="mb-4 w-48 max-w-full border-t-2 border-teal-light" />

        @php($parent = $layout->sectionNavigation['parent'])
        <h3 class="mb-4 text-3xl font-bold"><a href="{{ $parent->url }}">{{ $parent->title }}</a></h3>

        <nav class="space-y-2">
            @foreach ($layout->sectionNavigation['children'] as $child)
                <p class="text-2xl font-bold"><a href="{{ $child->url }}">{{ $child->title }}</a></p>
            @endforeach
        </nav>

    </div>
</div>
