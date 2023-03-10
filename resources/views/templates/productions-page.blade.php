@section('image', $page->image?->getUrl('thumbnail'))

@section('title', $page->title)
@extends('layouts.default') @section('content')

    @include('flexible.page-hero', ['layout' => $page])

    <div class="bg-white">
        <div class="container space-y-12 py-16 lg:py-36">
            @if ($page->productions)
                @foreach ($page->productions as $production)
                    @include('components.production-card', ['flip' => !($loop->iteration % 2)])
                @endforeach
            @endif
        </div>
    </div>

@endsection
