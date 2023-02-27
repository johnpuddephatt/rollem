<div class="bg-white py-24">
    <div class="container grid gap-x-12 gap-y-24 lg:grid-cols-3">

        @foreach ($layout->team as $member)
            <div class="text-center">
                <img class="aspect-[3/4] bg-gray" src="{{ Storage::disk('public')->url($member->photo) }}" />

                <h3 class="mt-12 mb-4 text-4xl font-bold">{{ $member->name }}</h3>
                <p class="text-2xl font-bold">{{ $member->role }}</p>
            </div>
        @endforeach
    </div>
</div>
