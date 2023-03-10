<div class="relative flex h-[calc(100vh-2rem)] flex-col justify-end gap-x-16 bg-red pb-16 pt-48 text-white lg:h-[75vh]">
    <div class="container relative w-full pt-16 lg:pt-32">
        <x-image conversion="2x3"
            class="right-0 top-0 z-[20] mb-8 ml-auto h-auto w-1/2 lg:absolute lg:mb-12 lg:mb-0 lg:w-2/5"
            :image="$user->photo" />
        <h1 class="wrap-words max-w-6xl text-6xl font-bold !tracking-normal lg:w-3/5 lg:text-8xl">
            {{ $user->name }}
        </h1>
    </div>
</div>
