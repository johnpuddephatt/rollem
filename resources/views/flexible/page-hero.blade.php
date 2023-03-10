<div
    class="@if ($layout->image) bg-black h-screen @else bg-red h-[66.67vh] @endif relative -z-10 flex flex-col items-center justify-end text-white">

    @if ($layout->image)
        <div
            class="pointer-events-none fixed top-0 left-0 right-0 z-10 h-64 bg-gradient-to-b from-[#000000aa] to-transparent">
        </div>
        <x-image id="hero-image" conversion="3x2" :image="$layout->image" class="fixed inset-0 h-full w-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
    @endif
    <div id="hero-text" class="container relative z-10 mb-12 max-w-3xl text-center opacity-90">
        <h1 class="{{ $text_color ?? 'text-white' }} mb-8 text-5xl font-bold !tracking-normal lg:text-8xl">
            {{ $layout->title }}</h1>
    </div>
</div>
