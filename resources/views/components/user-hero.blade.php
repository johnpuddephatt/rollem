<div class="relative flex h-[75vh] flex-col justify-end gap-x-16 bg-red pb-16 pt-48 text-white">
    <div class="container relative w-full pt-32">
        <x-image conversion="2x3"
            class="right-0 top-0 z-[20] mb-12 ml-auto h-auto w-3/4 sm:w-1/2 lg:absolute lg:mb-0 lg:w-2/5"
            :image="$user->photo" />
        <h1 class="lg:wrap-words max-w-6xl text-7xl font-bold !tracking-normal lg:text-8xl">
            {{ $user->name }}
        </h1>
    </div>
</div>
