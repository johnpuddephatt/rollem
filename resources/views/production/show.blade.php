@section('image', $production->image?->getUrl('thumbnail'))
@section('title', $production->title)
@extends('layouts.default') @section('content')
    @foreach ($production->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach

    <div class="container mt-12 lg:mt-16">
        <h2 class="mb-12 text-3xl font-bold lg:text-4xl"></h2>
        <div class="mb-12 flex flex-col items-end justify-between lg:flex-row">
            <h2 class="text-3xl font-bold lg:text-4xl">More of our productions</h2>
            <a class="text-2xl font-bold text-teal"
                href="{{ \App\Models\Page::getTemplateUrl('App\Nova\Templates\ProductionsPageTemplate') }}">see all
                productions</a>
        </div>
        <div class="my-8 grid gap-12 bg-white lg:my-16 lg:grid-cols-3 lg:gap-16">
            @foreach ($related_productions as $related_production)
                <x-production-card-small :production="$related_production" :flip="!($loop->iteration % 2)" />
            @endforeach
        </div>
    </div>
@endsection
