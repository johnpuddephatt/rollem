@section('image', $page->image?->getUrl('thumbnail'))

@section('title', $page->title)
@extends('layouts.default') @section('content')
    @include('components.posts-hero')

    <div class="relative border-t-[4rem] border-black pb-16 lg:pb-36">

        @foreach ($page->content as $layout)
            @include('flexible.' . $layout->name(), ['layout' => $layout])
        @endforeach

    </div>
@endsection
