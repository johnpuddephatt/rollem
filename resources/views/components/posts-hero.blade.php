<div class="relative -z-10 flex h-screen flex-col items-center justify-end overflow-hidden bg-black text-white">
    <img id="hero-image" class="fixed inset-0 h-full w-full object-cover"
        src="{{ Storage::disk('public')->url($page->image) }}" alt="">
    <div class="absolute inset-0 bg-gradient-to-t from-black"></div>
    <div id="hero-text" class="container relative z-10 mb-12 text-center opacity-90">
        <h1 class="mb-8 max-w-3xl text-8xl font-bold !tracking-normal text-lilac">{{ $page->title }}</h1>
    </div>
</div>
