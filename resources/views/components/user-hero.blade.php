<div class="relative flex h-[75vh] flex-col justify-end gap-x-16 bg-red pb-16 pt-48 text-white">
    <div class="container relative w-full pt-32">

        <h1 class="wrap-words max-w-6xl text-7xl font-bold !tracking-normal lg:text-8xl">
            {{ $user->name }}
        </h1>

        <x-image conversion="2x3" class="absolute right-0 top-0 z-[20] h-auto w-2/5" :image="$user->photo" />

    </div>
</div>
