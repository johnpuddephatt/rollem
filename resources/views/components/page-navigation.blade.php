@php($page = $page->parent ? $page->parent : $page)
<div class="bg-gray py-24 lg:order-none xl:pl-0">
    <div class="container grid grid-cols-2">
        <h2 class="text-4xl font-bold text-teal">More in this section</h2>
        <div class="px-12">
            <hr class="mb-4 w-48 max-w-full border-t-2 border-teal-light" />

            <h3 class="mb-4 text-3xl font-bold"><a
                    class="@if (url($page->url) == request()->url()) border-lilac @else border-transparent @endif border-b-4"
                    href="{{ $page->url }}">{{ $page->title }}</a></h3>

            <nav class="space-y-2">
                @foreach ($page->children as $child)
                    <p class="text-2xl font-bold"><a
                            class="@if (url($child->url) == request()->url()) border-lilac @else border-transparent @endif border-b-4"
                            href="{{ url($child->url) }}">{{ $child->title }}</a></p>
                @endforeach
            </nav>
        </div>
    </div>

</div>
