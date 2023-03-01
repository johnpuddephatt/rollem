<div class="relative -z-10 flex h-screen flex-col items-center justify-end bg-black text-white">
    <x-image conversion="3x2" :image="$layout->image" class="fixed inset-0 h-full w-full object-cover" />
    <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
    <div id="hero-text" class="container relative z-10 mb-12 max-w-3xl text-center opacity-90">
        <h1 class="{{ $text_color ?? 'text-white' }} mb-8 text-6xl font-bold !tracking-normal lg:text-8xl">
            {{ $layout->title }}</h1>
    </div>
</div>
