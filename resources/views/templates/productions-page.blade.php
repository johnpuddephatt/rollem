@extends('layouts.default') @section('content')
    @include('flexible.page-hero', ['layout' => $page, 'text_color' => 'text-lilac'])

    <div class="bg-white">
        <div class="container space-y-12 py-8 lg:py-36">
            @if ($page->productions)
                @foreach ($page->productions as $production)
                    @include('components.production-card', ['flip' => !($loop->iteration % 2)])
                @endforeach
            @endif
        </div>
    </div>
@endsection
