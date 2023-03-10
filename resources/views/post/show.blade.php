@section('image', $post->image?->getUrl('thumbnail'))
@section('title', $post->title)
@extends('layouts.default') @section('content')
    @include('flexible.post-hero', ['layout' => $post])
    <article>
        @foreach ($post->content as $layout)
            @include('flexible.' . $layout->name(), ['layout' => $layout])
        @endforeach
    </article>
@endsection
