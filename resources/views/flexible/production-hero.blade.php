<div class="relative -z-10 flex h-screen flex-col items-center justify-end bg-black text-white">
    <div
        class="pointer-events-none absolute top-0 left-0 right-0 z-10 h-64 bg-gradient-to-b from-[#000000aa] to-transparent">
    </div>
    <x-image :image="$layout->image" id="hero-image" conversion="3x2" class="absolute inset-0 h-full w-full object-cover" />

    <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
    <div id="hero-text" class="container relative z-10 mb-12 max-w-3xl text-center opacity-90">
        <h1 class="text-5xl font-bold !tracking-normal text-lilac lg:text-8xl">{!! nl2br($layout->title) !!}
        </h1>
    </div>
</div>
