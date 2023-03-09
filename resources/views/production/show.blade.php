@section('image', $production->image?->getUrl('thumbnail'))
@section('title', $production->title)
@extends('layouts.default') @section('content')
    @foreach ($production->content as $layout)
        @include('flexible.' . $layout->name(), ['layout' => $layout])
    @endforeach
@endsection
