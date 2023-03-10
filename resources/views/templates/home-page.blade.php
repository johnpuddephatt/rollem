@section('image', $page->image?->getUrl('thumbnail'))
@section('title', 'Local Heart, Global Reach')
@extends('layouts.default') @section('content')
    @foreach ($page->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach
@endsection
