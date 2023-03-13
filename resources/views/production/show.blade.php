@section('image', $production->image?->getUrl('thumbnail'))
@section('title', $production->title)
@extends('layouts.default') @section('content')
    @foreach ($production->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach

    <div class="container mt-8 lg:mt-16">
        <h2 class="mb-12 text-3xl font-bold lg:text-4xl">More of our productions</h2>
        <div class="my-8 grid gap-8 bg-white lg:my-16 lg:grid-cols-3 lg:gap-16">
            @foreach ($related_productions as $related_production)
                <x-production-card-small :production="$related_production" :flip="!($loop->iteration % 2)" />
            @endforeach
        </div>
    </div>
@endsection
