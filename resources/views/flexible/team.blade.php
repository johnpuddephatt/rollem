<div class="bg-white py-24">
    <div class="container grid gap-x-12 gap-y-24 lg:grid-cols-3">

        @foreach ($layout->team as $member)
            <a href="{{ $member->url }}" class="block text-center">
                <x-image :image="$member->photo" conversion="2x3" class="block w-full bg-gray" />
                <h3 class="mt-12 mb-4 text-4xl font-bold">{{ $member->name }}</h3>
                <p class="text-2xl font-bold">{{ $member->role }}</p>
            </a>
        @endforeach
    </div>
</div>
