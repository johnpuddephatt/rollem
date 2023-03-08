<div class="relative -z-10 flex h-screen flex-col justify-end bg-black pb-32 text-white lg:h-[80vh]">
    <div class="pointer-events-none absolute top-0 left-0 right-0 h-64 bg-gradient-to-b from-[#000000aa] to-transparent">
    </div>
    <div id="hero-text" class="container">
        <h1 class="max-w-6xl text-6xl font-bold !tracking-normal text-lilac lg:text-7xl 2xl:text-8xl">
            {!! nl2br($layout->title) !!}</h1>
    </div>
</div>

<div class="ml-auto -mt-24 lg:w-3/4 xl:w-2/3 2xl:w-1/2">
    <x-image conversion="3x2" :image="$layout->image" class="h-full w-full object-cover" />
</div>
