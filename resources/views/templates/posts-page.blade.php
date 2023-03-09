@section('image', $page->image?->getUrl('thumbnail'))

@section('title', $page->title)
@extends('layouts.default') @section('content')
    @include('components.posts-hero')

    <div class="bg-white py-16 lg:py-36">
        @foreach ($page->content as $layout)
            @include('flexible.' . $layout->name(), ['layout' => $layout])
        @endforeach
    </div>
@endsection
