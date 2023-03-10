@section('image', $production->image?->getUrl('thumbnail'))
@section('title', $production->title)
@extends('layouts.default') @section('content')
    @foreach ($production->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach

    <div class="container mt-16">
        <h2 class="mb-12 text-center text-4xl font-bold">More of our productions</h3>
            <div class="mb-8 space-y-8">
                @foreach ($related_productions as $related_production)
                    <x-production-card :production="$related_production" :flip="!($loop->iteration % 2)" />
                @endforeach
            </div>
    </div>
@endsection
