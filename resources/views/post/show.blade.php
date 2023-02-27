@extends('layouts.default') @section('content')
    @include('flexible.post-hero', ['layout' => $post])
    @foreach ($post->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach
@endsection
