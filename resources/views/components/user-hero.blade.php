<div
    class="relative flex h-[calc(100vh-2rem)] flex-col justify-end gap-x-16 bg-red pb-8 pt-48 text-white lg:h-[80vh] lg:pb-16">
    <div class="container relative w-full pt-16 lg:pt-32">
        <x-image conversion="2x3"
            class="right-0 top-0 z-[20] mb-4 ml-auto h-auto w-2/3 sm:w-1/2 lg:absolute lg:-mt-24 lg:mb-0 lg:w-2/5"
            :image="$user->photo" />
        <a class="mb-2 inline-block border-b-2 border-[#fff3] text-xl font-bold transition hover:border-white"
            href="/about-us/our-team/">Our team</a>

        <h1 class="wrap-words max-w-6xl text-6xl font-bold !tracking-normal lg:w-3/5 lg:text-8xl">
            {{ $user->name }}
        </h1>
    </div>
</div>
