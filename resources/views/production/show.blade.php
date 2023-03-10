@section('image', $production->image?->getUrl('thumbnail'))
@section('title', $production->title)
@extends('layouts.default') @section('content')
    @foreach ($production->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach

    <div class="container mt-16">
        <h2 class="mb-12 text-4xl font-bold">More of our productions</h2>
        <div class="my-16 grid gap-16 bg-white lg:grid-cols-3">
            @foreach ($related_productions as $related_production)
                <x-production-card-small :production="$related_production" :flip="!($loop->iteration % 2)" />
            @endforeach
        </div>
    </div>
@endsection
